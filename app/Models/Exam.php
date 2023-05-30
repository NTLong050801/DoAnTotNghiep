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
        'is_see_answers',
        'is_end',
    ];
    public function user(){
        return $this->belongsToMany(User::class, 'exams_students', 'exam_id', 'id_user');
    }

    public function examQuestions(){
        return $this->hasMany(ExamsQuestions::class,'exam_id','id');
    }

    public function examStudents(){
        return $this->hasMany(ExamsStudents::class,'exam_id','id');
    }
}
