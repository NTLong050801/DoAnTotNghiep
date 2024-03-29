<?php

namespace App\Http\Controllers\Teachers;

use App\Exports\ResultExamExport;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamsStudents;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ResultsController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function index($exam_id = null)
    {
        $exams = Exam::where('user_id', auth()->id())->where('is_end', true)->orderBy('id', 'desc')->get();
        $examsStudents = null;
        if ($exam_id != null) {
            $examsStudents = ExamsStudents::where('exam_id', $exam_id)->orderBy('id', 'desc')->get();
        }
        return view('pages.teachers.results.index', compact('exams', 'examsStudents'));
    }

    public function answers(string $exam_id, string $user_id)
    {
        $examStudents = ExamsStudents::where('exam_id', $exam_id)
            ->where('id_user', $user_id)->first();
        $myQuestion = $examStudents->questions;
        $listQuestion = collect();
        $name = $examStudents->exam->name;
        foreach (json_decode($myQuestion, true) as $q) {
            $question = Question::where('id', $q)->first();
            $listQuestion->push($question);
        }
        $myAnswers = json_decode($examStudents->answers);
        return view('pages.teachers.results.answers', compact('listQuestion', 'myAnswers', 'examStudents'));
    }

    public function exportExcel(string $exam_id)
    {
        $exam = Exam::find($exam_id);
        return $this->excel->download(new ResultExamExport($exam_id), $exam->name . '.xlsx');
    }

    public function exportPDF(string $exam_id)
    {
        $examsStudents = ExamsStudents::where('exam_id', $exam_id)->get();
        $exam = Exam::find($exam_id);
        $pdf = Pdf::loadView('pages.teachers.results.result-pdf', [
            'examsStudents' => $examsStudents,
            'exam' => $exam,
        ]);
        $pdfPath = storage_path(uniqid() . '.pdf');
        $pdf->save($pdfPath);
        Storage::disk('google')->put($exam->name . '.pdf', file_get_contents($pdfPath));
        unlink($pdfPath);
        return $pdf->download('Điểm thi ' . $exam->name . '.pdf');
    }

    public function exportImg(string $exam_id)
    {
        $examsStudents = ExamsStudents::where('exam_id', $exam_id)->get();
        $exam = Exam::find($exam_id);
        $html = view('pages.teachers.results.result-pdf', compact('examsStudents', 'exam'))->render();
        $snappy = \App::make('snappy.image');
        $imageContents = $snappy->getOutputFromHtml($html);
        $nameImage = $exam->name . '.jpg';
        return response($imageContents)
            ->header('Content-Type', 'image/jpeg')
            ->header('Content-Disposition', 'attachment; filename="' . $nameImage . '"');
    }
}
