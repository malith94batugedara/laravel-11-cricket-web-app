<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';

    protected $fillable = [
          'sch_name',
          'time_period',
          'country',
          'num_of_staff',
          'depart_date',
          'arrive_date'
    ];
}
