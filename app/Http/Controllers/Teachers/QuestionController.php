<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Imports\QuestionsImport;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Excel;

class QuestionController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }
    public function index(Request $request)
    {
        $query = Question::query();
        if(\request('search')){
            $query = $query->where('name','LIKE','%'.$request->search.'%');
        }
        $questions = $query->where('user_id',auth()->id())->orderBy('id','desc')->paginate('20');
        return view('pages.teachers.questions.index',compact('questions'));
    }

    public function create()
    {
        return view('pages.teachers.questions.create');
    }

    public function store(Request $request)
    {
        $path = '';
        if ($request->hasFile('file')) {
            $path = Storage::disk('public')->put('questions', $request->file);
        }
        Question::create([
            'name' => $request->name,
            'ans' => $request->ans,
            'options' => json_encode(array('option1' => $request->option1, 'option2' => $request->option2, 'option3' => $request->option3, 'option4' => $request->option4)),
            'note' => $request->note,
            'image' => $path,
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('teachers.questions.index');
    }

    public function edit(Question $question){
        return view('pages.teachers.questions.edit',compact('question'));
    }

    public function update(Request $request , Question $question){
        $path = '';
        if ($request->hasFile('file')) {
            $path = Storage::disk('public')->put('questions', $request->file);
            $request['image'] = $path;
        }
        $request['options'] = json_encode(array('option1' => $request->option1, 'option2' => $request->option2, 'option3' => $request->option3, 'option4' => $request->option4));
        $question->update($request->all());
        return redirect()->route('teachers.questions.index');
    }

    public function deleteSelected(Request $request){
        $array_id = $request->input('deteleSelected');

        $questions = Question::whereIn('id', $array_id)->get();

        foreach ($questions as $question) {
            $question->delete();
        }
        return response()->json(['message' => 'Users deleted successfully.']);
    }

    public function destroy(Question $question){
        $question->delete();
        return redirect()->route('teachers.questions.index');
    }

    public function import(Request $request){
        $file = $request->file('file');
        $this->excel->import(new QuestionsImport, $file);
        return redirect()->route('teachers.questions.index')->with('success', "Nhập thành công !!!");
    }
}
