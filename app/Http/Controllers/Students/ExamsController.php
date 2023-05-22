<?php

namespace App\Http\Controllers\Students;

use App\Events\ActiveChanged;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamsQuestions;
use App\Models\ExamsStudents;
use App\Models\Question;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ExamsController extends Controller
{
    public function index()
    {
        $examsStudents = ExamsStudents::where('id_user', auth()->id())
            ->where('isActive', false)
            ->get();
        return view('pages.students.exams.index', compact('examsStudents'));
    }

    public function start(Request $request)
    {
        $exam_id = $request->input('exam_id');
        $exam = Exam::where('id', $exam_id)->first();

        $numberQuestion = (integer)$exam->number_question;
        $random = $exam->random;
        $password = $exam->password;
        if (isset($password)) {
            return 'password';
        }
        $listQuestions = ExamsQuestions::query();
        $listQuestions->where('exam_id', $exam_id);
        if ($random) {
            $listQuestions->inRandomOrder();
        }
        if (isset($numberQuestion)) {
            $listQuestions->limit($numberQuestion);
        }
        $listQuestions->get();
        $idQuestions = $listQuestions->pluck('question_id')->toArray();
        $examStudent = ExamsStudents::where('id_user', auth()->id())
            ->where('exam_id', $request->input('exam_id'))->first();
        $updateActive = $examStudent->update([
            'isActive' => true,
            'questions' => $idQuestions,
            'time_started' => Carbon::now(),
            'answers' => array_fill(0, count($idQuestions), 0),
        ]);
        if ($updateActive) {
            return 'success';
        }
        //return 'fail';
    }

    public function doExam(Request $request)
    {
        $examStudent = ExamsStudents::where('id_user', auth()->id())
            ->where('exam_id',$request->exam)->first();
        if (!$examStudent->isActive || !is_null($examStudent->result)) {
            return redirect()->route('students.exams.index');
        }

        $listQuestion = collect();

        foreach (json_decode($examStudent->questions,true) as $q) {
            $question = Question::where('id', $q)->first();
            $listQuestion->push($question);
        }
        //thoi gian bat dau lam bai
        $startTime = Carbon::parse($examStudent->time_started);

        // thoi gian hien tai
        $endTime = Carbon::parse(Carbon::now());
        // thoi gian da lam
        $durationInSeconds = $endTime->diffInSeconds($startTime);
        $time_exam =$examStudent->exam->minute_time*60;
        $totalSeconds = $time_exam-$durationInSeconds ;
        $myAnswers = json_decode($examStudent->answers);
        return view('pages.students.exams.do-exam',compact('listQuestion','examStudent','totalSeconds','myAnswers'));
    }

    public function checkPassword(Request $request)
    {
        $exam_id = $request->input('exam_id');
        $exam = Exam::where('id', $exam_id)->first();
        if ($exam->password != $request->input('password')) {
            return 'fail';
        }
        $numberQuestion = (integer)$exam->number_question;
        $random = $exam->random;
        $listQuestions = ExamsQuestions::query();
        $listQuestions->where('exam_id', $exam_id);
        if ($random) {
            $listQuestions->inRandomOrder();
        }
        if (isset($numberQuestion) && $numberQuestion != 0) {
            $listQuestions->limit($numberQuestion);
        }
        $listQuestions->get();
        $idQuestions = $listQuestions->pluck('question_id')->toArray();
        $examStudent = ExamsStudents::where('id_user', auth()->id())
            ->where('exam_id', $request->input('exam_id'))->first();
        $updateActive = $examStudent->update([
            'isActive' => true,
            'questions' => $idQuestions,
            'time_started' => Carbon::now(),
            'answers' => array_fill(0, count($idQuestions), 0),
        ]);
        if ($updateActive) {
            return 'success';
        }
    }

    public function checkResult(Request $request){
        $payload = $request->all();
        $exam_id = $request->input('exam_id');
        $arrayAnswer = [];
        $dem = 0;
        foreach ($payload as $key => $value) {
            if ($key === '_token') {
                continue; // Skip the token
            }
            if ($key === 'exam_id'){
                continue;
            }
            if ($key === 'tab'){
                continue;
            }
            array_push($arrayAnswer,$value);
            $question = Question::where('id',$key)->first();
            if($question->ans == $value){
                $dem++;
            }
        }
        $examStudent = ExamsStudents::where('id_user', auth()->id())
            ->where('exam_id',$request->exam_id)->first();
        $examStudent->update([
            'answers' => $arrayAnswer,
            'result' => $dem,
        ]);
        return json_encode([
            'success' => 'ok'
        ]);
    }

    public function updateWarning(Request $request){
        $examStudent = ExamsStudents::where('id_user', auth()->id())
            ->where('exam_id',$request->input('exam_id'))->first();
        $examStudent->update([
            'warning' => $request->input('tab'),
        ]);
    }

    public function result(Request $request){
        $examStudent = ExamsStudents::where('id_user', auth()->id())
            ->where('exam_id',$request->exam_id)->first();
        return view('pages.students.exams.result',compact('examStudent'));

    }

    public function updateAnswers(Request $request){
        $exam_id = $request->input('exam_id');
        $answer = $request->input('answer');
        $index = $request->input('index');
        $myExam = ExamsStudents::where('exam_id',$exam_id)->where('id_user',auth()->id())->first();
        $answers = json_decode($myExam->answers,true);
        $answers[(integer)$index] = $answer;
        $myExam->update([
           'answers' => $answers
        ]);
        $isEnd = $myExam->exam->is_end;
        if ($isEnd){
            return true;
        }
        return  false;
    }

    public function test(Request $request){
            // Xử lý cập nhật active
            $active = $request->input('active');

            event(new ActiveChanged(true));

            return response()->json(['success' => true]);
    }
}
