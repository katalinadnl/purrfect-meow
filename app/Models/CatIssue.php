<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatIssue extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_id',
        'issues_with_kids',
        'issues_with_other_cats',
        'issues_with_dogs',
        'no_issues',
    ];

    //relation avec la table Cat -> eager loading (préchargement)
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}
