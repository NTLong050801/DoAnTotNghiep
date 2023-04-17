<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\User;
use App\Repositories\Admin\UsersRepositoryEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    protected $repository;

    public function __construct(UsersRepositoryEloquent $repository){
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $majors= Major::all();
        $students = User::with('majors')->where("role",0)->paginate(1);
        $title = "Danh sách sinh viên";
        return view('admin.student.index',compact('title','majors','students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $majors= Major::all();
        $title = "Thêm mới sinh viên";
        return view('admin.student.create',compact('title','majors'));
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
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'identifier' => $request->identifier,
            'password' => bcrypt($request->password),
            'major_id' => $request->major_id,
        ]);
        Session::flash('success',"Thêm sinh viên thành công");
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function search(Request $request){
        $majors= Major::all();
       $students =  $this->repository->findByField('identifier',$request->search);
        $title = "Danh sách sinh viên";
        return view('admin.student.index',compact('title','majors','students'));
    }

    public function edit(string $id)
    {
        //
        $majors = Major::all();
        $title = "Sửa sinh viên";
        $student = User::find($id);
        return view('admin.student.edit',compact('title','student','majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|min:10',
            'identifier'=> 'required|unique:users',
            'email' => 'required|unique:users',
        ]);
        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'identifier' => $request->identifier,
            'major_id' => $request->major_id,
        ]);
        Session::flash("success","Update thành công");
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        User::destroy($id);
        Session::flash("success","Xóa sinh viên thành công");
        return redirect()->route('student.index');
    }
}
