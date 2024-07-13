<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        $hasCats = fake()->boolean();
        $hasDogs = fake()->boolean();
        $hasKids = fake()->boolean();
        $noIssues = !$hasCats && !$hasDogs && !$hasKids || fake()->boolean(); // si l'utilisateur n'a pas de chats, de chiens ou d'enfants, il ne peut pas avoir de "perturbateurs

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'role' => fake()->randomElement([User::ROLE_ADMIN, User::ROLE_CLIENT]),
            'has_cats' => $hasCats,
            'has_dogs' => $hasDogs,
            'has_kids' => $hasKids,
            'no_issues' => $noIssues,
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
