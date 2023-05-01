<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExamsQuestions extends Model
{
    protected $table='exams_questions';
    protected $fillable = [
        'exam_id',
        'question_id',
    ];

    public function exam():BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function question():BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
