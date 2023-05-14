<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamsStudents extends Model
{
    protected $table = 'exams_students';
    protected $fillable = [
        'exam_id',
        'id_user',
        'time_started',
        'questions',
        'answers',
        'result',
        'warning',
        'isActive',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }
}
