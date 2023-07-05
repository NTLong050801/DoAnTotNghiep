<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\ExamsStudents;
use App\Models\Question;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ResultsContrller extends Controller
{
    public function index(Request $request)
    {
        if ($keyword = $request->input('keyword')) {
            $examStudents = ExamsStudents::where('id_user', auth()->id())
                ->where('isActive', 1)->whereNotNull('result')->whereHas('exam', function (Builder $query) use ($keyword) {
                    $query->where('name', 'LIKE', '%' . $keyword . '%');
                })->orderBy('id', 'desc')
                ->get();
        } else {
            $examStudents = ExamsStudents::where('id_user', auth()->id())
                ->where('isActive', 1)->whereNotNull('result')->orderBy('id', 'desc')
                ->get();
        }
        return view('pages.students.results.index', compact('examStudents'));
    }

    public function answers(Request $request)
    {
        $examStudents = ExamsStudents::where('exam_id', $request->exam_id)
            ->where('id_user', auth()->id())->first();
        $myQuestion = $examStudents->questions;
        $listQuestion = collect();
        $name = $examStudents->exam->name;
        foreach (json_decode($myQuestion, true) as $q) {
            $question = Question::where('id', $q)->first();
            $listQuestion->push($question);
        }
        $myAnswers = json_decode($examStudents->answers);

        return view('pages.students.results.answers', compact('listQuestion', 'myAnswers', 'name'));
    }
}
