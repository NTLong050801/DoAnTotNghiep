<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\User;
use App\Repositories\Admin\UsersRepositoryEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{

    public function index(Request $request)
    {
        $students = User::with('majors')->where("role", 0)->orderBy('id', 'desc')->paginate();
        if (request('keyword')) {
            $students = User::search($request->keyword)->within('majors')->where('role', 0)->orderBy('id', 'desc')->paginate()->withQueryString();
        }
        return view('pages.admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $majors= Major::all();
        return view('pages.admin.student.create',compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
           'name' => 'required|min:10',
            'identifier'=> 'required|unique:users',
            'email' => 'required|unique:users',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'identifier' => $request->identifier,
            'password' => Hash::make($request->input('email')),
            'role' => '0',
            'major_id' => $request->major_id,
        ]);
        toastr('Tạo sinh viên thành công');
        return redirect()->route('admin.student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    public function edit(User $student)
    {
        $majors = Major::all();
        return view('pages.admin.student.edit',compact('student','majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $student)
    {

        $request->validate([
            'name' => 'required|min:10',
            'identifier'=> 'required|unique:users',
            'email' => 'required|unique:users,email,'.$student->id,
        ]);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'identifier' => $request->identifier,
            'major_id' => $request->major_id,
        ]);
        toastr('Sửa sinh viên thành công');
        return redirect()->route('admin.student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $student)
    {
       $student->delete();
       return  redirect()->route('admin.student.index');
    }
}
