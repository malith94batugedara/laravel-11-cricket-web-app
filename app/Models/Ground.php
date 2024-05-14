<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    use HasFactory;

    protected $table = 'grounds';

    protected $fillable = [
          'ground_name',
          'ground_location',
          'capacity',
          'number_of_gates',
          'number_of_matches_played'
    ];
}
