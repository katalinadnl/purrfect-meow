<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    /**
     * @var string|null
     */
    public ?string $image = null;

    protected $fillable = [
        'breed',
        'name',
        'age',
        'gender',
        'issues_with_kids',
        'issues_with_other_cats',
        'issues_with_dogs',
        'no_issues',
        'image',
    ];
}
