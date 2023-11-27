<?php

namespace App\Http\Controllers\Students;

use App\Events\SendResultEvent;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamsStudents;
use App\Models\Question;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function sendMail(Request $request){
        $examsStudents = ExamsStudents::where('exam_id', $request->exam_id)->get();
        $exam = Exam::find($request->exam_id);
        $pdf = Pdf::loadView('pages.teachers.results.result-pdf', [
            'examsStudents' => $examsStudents,
            'exam' => $exam,
        ]);
        $nameFile = uniqid() . '.pdf';
        $pdfPath = storage_path($nameFile);
        $pdf->save($pdfPath);
        SendResultEvent::dispatch($request->input('email'),$pdfPath);
        unlink($pdfPath);
        return redirect()->back();
    }
}
