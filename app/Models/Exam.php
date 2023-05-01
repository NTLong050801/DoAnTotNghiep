<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $fillable = [
        'name',
        'minute_time',
        'number_question',
        'date_start',
        'date_end',
        'note',
        'password',
        'status',
        'random',
        'user_id',
    ];
}
