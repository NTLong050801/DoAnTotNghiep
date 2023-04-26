<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Exam::query();
        $query = $query->where('user_id',auth()->id())->orderBy('id','desc');
        if (\request('keyword')){
            $query = $query->where('name','like','%'.$request->keyword.'%');
        }
        $exams = $query->paginate('10');
        return view('pages.teachers.exams.index',compact('exams'));
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
            'name' => ['string','required','max:255'],
            'minute_time' => 'integer|min:0|required',
            'number_question' => 'integer|nullable',
            'date_start' => 'date|nullable',
            'date_end' => 'date|nullable',
            'note' => 'string|nullable',
            'password' => 'string|nullable',
        ]);
        if(request('random')){
            $request['random'] = true;
        }
        $request['user_id'] = auth()->id();
        Exam::create($request->all());
        return redirect()->route('teachers.exams.index');
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
    public function edit(Exam $exam)
    {
        return view('pages.teachers.exams.edit',compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'name' => ['string','required','max:255'],
            'minute_time' => 'integer|min:0|required',
            'number_question' => 'integer|nullable',
            'date_start' => 'date|nullable',
            'date_end' => 'date|nullable',
            'note' => 'string|nullable',
            'password' => 'string|nullable',
        ]);
        if(request('random')){
            $request['random'] = true;
        }else{
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
}
