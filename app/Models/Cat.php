<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Races;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cat extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The primary key associated with the table.
     * @var string
     */
    protected $primaryKey = 'id_cat';

    public function race()
    {
        return $this->belongsTo(Races::class, 'id_race'); // Replace 'id_race' with the actual foreign key column name
    }

}
