<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Imports\TeacherImport;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Excel;

class TeacherController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $teachers = User::with('majors')->where("role", 1)->orderBy('id', 'desc')->paginate();
        if (request('keyword')) {
            $teachers = User::search($request->keyword)->within('majors')->where('role', 1)->orderBy('id', 'desc')->paginate()->withQueryString();
        }

        return view('pages.admin.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::all();
        return view('pages.admin.teacher.create', compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'email|required|unique:users,email',
            'major_id' => 'required',
        ]);
        $password = Hash::make($request->email);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'role' => '1',
            'major_id' => $request->major_id,
        ]);
        return redirect()->route('teachers.index')->with('success', "Thêm giảng viên thành công");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $teacher)
    {
        $majors = Major::all();
        return view('pages.admin.teacher.edit', compact('teacher', 'majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $teacher)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => ['email', 'required', ['email', 'required', Rule::unique(User::class)->ignore($teacher->id)],],
            'major_id' => 'required',
        ]);
        $teacher->update($request->all());
        return redirect()->route('teachers.index')->with('success', "Sửa giảng viên thành công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success',"Xóa thành công giảng viên.");
    }

    public function export(string $type)
    {
        if ($type == 'csv') {
            return $this->excel->download(new UsersExport, 'teacher.csv');
        }
        if ($type == 'pdf') {
            return $this->excel->download(new UsersExport, 'teacher.pdf', Excel::DOMPDF, ['Content-Encoding' => 'UTF-8', 'charset' => 'UTF-8',]);
        }
        return $this->excel->download(new UsersExport, 'teacher.xlsx');
    }

    public function import(Request $request){
        $file = $request->file('file');
        $this->excel->import(new TeacherImport, $file);
        return redirect()->route('teachers.index')->with('success', "Nhập thành công !!!");
    }
}
