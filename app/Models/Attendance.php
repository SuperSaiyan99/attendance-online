<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'info_id', 
        'info_sid', 
        'info_fname',
        'info_lname',
        'info_mname',
        'info_course',
        'info_yr_lvl',
        'date',
        'time_in',
        'time_out',
        'sched_type',
    ];
}