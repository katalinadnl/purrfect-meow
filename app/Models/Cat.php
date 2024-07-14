<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed',
        'name',
        'age',
        'gender',
        'image',
    ];

    //relation avec la table CatIssue
    public function issues()
    {
        return $this->hasOne(CatIssue::class);
    }

    //scope pour récupérer les chats compatibles avec l'utilisateur
    public function scopeCompatibleWithUser($query, User $user)
    {
        return $query->whereHas('issues', function ($query) use ($user) {
            $query
                ->when($user->has_kids, fn($query) => $query->where('issues_with_kids', 0))
                ->when($user->has_cats, fn($query) => $query->where('issues_with_other_cats', 0))
                ->when($user->has_dogs, fn($query) => $query->where('issues_with_dogs', 0));
        });
    }
}
