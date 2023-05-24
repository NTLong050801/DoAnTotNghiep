<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamsStudents;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index($exam_id = null){
        $exams = Exam::where('user_id',auth()->id())->get();
        $examsStudents = null;
        if ($exam_id != null){
            $examsStudents = ExamsStudents::where('exam_id',$exam_id)->get();
        }
        return view('pages.teachers.results.index',compact('exams','examsStudents'));
    }
}
