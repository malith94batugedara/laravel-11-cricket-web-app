<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = [
           'player_name',
           'cap_number',
           'debut_date',
           'matches_played',
           'player_age'
    ];
}
