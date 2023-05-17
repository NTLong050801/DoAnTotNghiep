<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\ClassesStudents;
use App\Models\Exam;
use App\Models\ExamsQuestions;
use App\Models\ExamsStudents;
use App\Models\Major;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Exam::query();
        $query = $query->where('user_id', auth()->id())->orderBy('id', 'desc');
        if (\request('keyword')) {
            $query = $query->where('name', 'like', '%' . $request->keyword . '%');
        }
        $exams = $query->paginate('10');
        return view('pages.teachers.exams.index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.teachers.exams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['string', 'required', 'max:255'],
            'minute_time' => 'integer|min:0|required',
            'number_question' => 'integer|nullable',
            'date_start' => 'date|nullable',
            'date_end' => 'date|nullable',
            'note' => 'string|nullable',
            'password' => 'string|nullable',
        ]);
        if (request('random')) {
            $request['random'] = true;
        }
        $request['user_id'] = auth()->id();
        Exam::create($request->all());
        return redirect()->route('teachers.exams.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        $examsQuestions = ExamsQuestions::where('exam_id', $exam->id)->pluck('question_id');
        $questions = Question::where('user_id', auth()->id())
            ->whereNotIn('id', $examsQuestions)
            ->get();
        $examsQuestions = Question::whereIn('id', $examsQuestions)->get();
        $classes = Classes::where('teacher_id', auth()->id())->get();
        $majors = Major::all();
        return view('pages.teachers.exams.show', compact('exam', 'questions', 'examsQuestions', 'classes', 'majors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        return view('pages.teachers.exams.edit', compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'name' => ['string', 'required', 'max:255'],
            'minute_time' => 'integer|min:0|required',
            'number_question' => 'integer|nullable',
            'date_start' => 'date|nullable',
            'date_end' => 'date|nullable',
            'note' => 'string|nullable',
            'password' => 'string|nullable',
        ]);
        if (request('random')) {
            $request['random'] = true;
        } else {
            $request['random'] = false;
        }
        $exam->update($request->all());
        return redirect()->route('teachers.exams.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('teachers.exams.index');
    }

    public function addQuestion(string $exam_id, Request $request)
    {
        $examsQuestions = ExamsQuestions::where('exam_id', $exam_id)->pluck('question_id');
        $questions = Question::where('user_id', auth()->id())
            ->whereNotIn('id', $examsQuestions)
            ->where('name', 'LIKE', '%' . $request->search . '%')
            ->get();
        return view('pages.teachers.ajax.add-question', compact('questions'));
    }

    public function myQuestion(string $exam_id)
    {
        $examsQuestions = ExamsQuestions::where('exam_id', $exam_id)->pluck('question_id');
        $examsQuestions = Question::whereIn('id', $examsQuestions)->orderBy('id', 'desc')->get();
        return view('pages.teachers.ajax.my-question', compact('examsQuestions'));
    }

    public function addClass(Request $request)
    {
        $class_student = ClassesStudents::where('class_id', $request->input('class_id'))->get();
        foreach ($class_student as $student) {
            //check sv có trong đề thi chưa
            if (!ExamsStudents::where('id_user', $student->user_id)->where('exam_id', $request->input('exam_id'))->first()) {
                ExamsStudents::create([
                    'exam_id' => $request->input('exam_id'),
                    'id_user' => $student->user_id,
                ]);
            }
        }
    }

    public function addStudent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'identifier' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }
        $major = $request->input('major');
        $account = User::where('email', $request->input('email'))->first();
        if (!$account) {
            $account = User::create([
                'name' => $request->input('name'),
                'identifier' => $request->input('identifier'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('email')),
                'role' => 0,
                'major_id' => $major,
            ]);
        }
        if (!ExamsStudents::where('id_user', $account->id)->where('exam_id', $request->input('exam_id'))->first()) {
            ExamsStudents::create([
                'exam_id' => $request->input('exam_id'),
                'id_user' => $account->id,
            ]);
        }
        return json_encode([
            'success' => "Thêm thành công",
        ]);
    }

    public function studentInClass(Request $request)
    {
        $exam_id = $request->input('exam_id');
        $exam = Exam::where('id', $request->input('exam_id'))->first();
        if(!$request->input('keyword')){
            $students = $exam->user()->get();
        }else{
            $students = $exam->user()->where('name', 'LIKE', '%' . $request->input('keyword') . '%')->get();

        }
        return view('pages.teachers.ajax.exams-students-list', compact('students','exam_id'));
    }

    public function active(Request $request, Exam $exam)
    {
        $exam->update([
            'status' => $request->status,
        ]);
        if ($request->status == '1') {
            toastr('Kích hoạt thành công !!');
        } else {
            toastr('Hủy kích hoạt thành công !!');
        }
        return redirect()->route('teachers.exams.index');
    }

    public function newPassword(Request $request)
    {
        $exam = Exam::where('id', $request->input('exam_id'))->first();
        $updatePassword = $exam->update([
            'password' => $request->input('password')
        ]);
        if ($updatePassword) {
            return 'success';
        }
    }
    public function deleteStudent(Request $request){
        myExam($request->input('exam_id'),$request->input('user_id'))->delete();
    }

    public function resetExam(Request $request){
        $exam_id = $request->input('exam_id');
        $exam = Exam::where('id', $exam_id)->first();
        $numberQuestion = (integer)$exam->number_question;
        $random = $exam->random;
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
        myExam($exam_id,$request->input('user_id'))->update([
            'isActive' => false,
            'questions' => $idQuestions,
            'time_started' => null,
            'answers' => null,
            'result' => null,
            'warning' => 0,
        ]);
    }

    public function resultExam(Request $request){
        return myExam($request->input('exam_id'),$request->input('user_id'));
    }
}
