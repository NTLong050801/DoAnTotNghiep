<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if($request->filled('search')){
            $majors = Major::search($request->search)->paginate(10)->withQueryString();
        }else{
            $majors = Major::search('')->paginate(10);;
        }
        return view('pages.admin.major.list',compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.admin.major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|unique:majors|min:10',
        ]);
        Major::create([
            'name'=> $request->name,
        ]);
        Session::flash('success',"Thêm khoa thành công");
        return redirect()-> route('major.index');

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
    public function edit(string $id)
    {
        //
        $major = Major::find($id);
        $title = "Sửa tên khoa  ".$major->name;
        return view('admin.major.edit',compact('major','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|unique:majors,name|min:10',
        ]);
        Major::where('id',$id)->update([
            'name' => $request->name,
        ]);
        Session::flash('success',"Cập nhật khoa thành công");
        return redirect()->route('major.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Major::destroy($id);
        Session::flash('success',"Xóa khoa thành công");
        return redirect()->route('major.index');

    }
}
