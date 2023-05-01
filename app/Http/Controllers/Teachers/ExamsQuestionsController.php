<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\ExamsQuestions;
use Illuminate\Http\Request;

class ExamsQuestionsController extends Controller
{
    public function store(Request $request)
    {
        $question_id = $request->input('question_id');
        $exam_id = $request->input('exam_id');
        $examsQuestions = ExamsQuestions::create([
            'exam_id' => $exam_id,
            'question_id' => $question_id,
        ]);
        if ($examsQuestions) {
            return true;
        }
        return false;
    }

    public function destroy(string $id_question,Request $request){
        ExamsQuestions::where('question_id',$id_question)
            ->where('exam_id',$request->exam_id)->delete();
    }
}
