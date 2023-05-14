<?php

namespace App\Http\Controllers;

use App\Imports\ClassStudentsImport;
use App\Imports\QuestionsImport;
use App\Models\Classes;
use App\Models\ClassesStudents;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Excel;

class ClassesController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function index(Request $request)
    {
        $query = Classes::query();
        $query->where('teacher_id', auth()->id());
        if (request('keyword')) {
            $query->where('name', 'Like', '%' . request('keyword') . '%');
        }
        $classes = $query->paginate('10');
        return view('pages.teachers.classes.index', compact('classes'));
    }

    public function create()
    {
        return view('pages.teachers.classes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);
        Classes::create([
            'name' => $request->name,
            'teacher_id' => auth()->id(),
        ]);
        toastr('Tạo lớp học thành công !!');
        return redirect()->route('teachers.classes.index');
    }

    public function show(Classes $class)
    {
        $students = ClassesStudents::where('class_id', $class->id)->get();
        $majors = Major::all();
        return view('pages.teachers.classes.detail', compact('class', 'students','majors'));
    }

    public function edit(Classes $class)
    {
        return view('pages.teachers.classes.edit', compact('class'));
    }

    public function update(Request $request, Classes $class)
    {
        $request->validate([
            'name' => 'required|string'
        ]);
        $class->update([
            'name' => $request->name,
        ]);
        toastr('Sửa lớp học thành công');
        return redirect()->route('teachers.classes.index');
    }

    public function destroy(Classes $class)
    {
        $class->delete();
        toastr('Xoá lớp học thành công !');
        return redirect()->route('teachers.classes.index');
    }

    public function classes_students(Request $request)
    {
        $class = Classes::with('user')->where('id', $request->class_id)->first();
        $students = $class->user;
        return view('pages.teachers.ajax.classes-students', compact('students'));
    }

    public function createStudent(Request $request)
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
        $account = User::where('email', $request->input('email'))->first();
        if (!$account) {
            $account = User::create([
                'name' => $request->input('name'),
                'identifier' => $request->input('identifier'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('email')),
                'role' => 0,
                'major_id' => $request->input('major'),
            ]);
        }
        $StudentInClass = ClassesStudents::where('class_id', $request->input('class_id'))->where('user_id', $account->id)->first();
        if (!$StudentInClass) {
            ClassesStudents::create([
                'class_id' => $request->input('class_id'),
                'user_id' => $account->id,
            ]);
        }
        return json_encode([
            'success' => "Thêm thành công",
        ]);
    }

    public function import(Request $request){
        $file = $request->file('file');
        $class_id = $request->class_id;
        $this->excel->import(new ClassStudentsImport($class_id), $file);
        toastr('Nhập thành công');
        return redirect()->back();
    }

    public function deleteStudent(Request $request){
       $class_student = ClassesStudents::where('class_id',$request->input('class_id'))->where('user_id',$request->input('id_student'))->first();
        $class_student->delete();
    }

    public function detail_student(Request $request){
        $user = User::find($request->input('id_student'));
        return view('pages.teachers.ajax.detail-student',compact('user'));
    }
}
