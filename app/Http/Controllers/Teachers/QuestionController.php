<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Imports\QuestionsImport;
use App\Models\Question;
use App\Models\User;
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
        if (\request('search')) {
            $query = $query->where('name', 'LIKE', '%' . $request->search . '%');
        }
        $questions = $query->where('user_id', auth()->id())->orderBy('id', 'desc')->paginate('20');
        $count = $query->count();
//        $questions = $query;
        return view('pages.teachers.questions.index', compact('questions', 'count'));
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
        toastr('Thêm câu hỏi thành công !!');
        return redirect()->route('teachers.questions.index');
    }

    public function edit(Question $question)
    {
        return view('pages.teachers.questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $path = '';
        if ($request->hasFile('file')) {
            $path = Storage::disk('public')->put('questions', $request->file);
            $request['image'] = $path;
        }
        $request['options'] = json_encode(array('option1' => $request->option1, 'option2' => $request->option2, 'option3' => $request->option3, 'option4' => $request->option4));
        $question->update($request->all());
        return redirect()->route('teachers.questions.index');
    }

    public function deleteSelected(Request $request)
    {
        $array_id = $request->input('deteleSelected');

        $questions = Question::whereIn('id', $array_id)->get();

        foreach ($questions as $question) {
            $question->delete();
        }
        return response()->json(['message' => 'Users deleted successfully.']);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('teachers.questions.index');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        $this->excel->import(new QuestionsImport, $file);
        return redirect()->route('teachers.questions.index')->with('success', "Nhập thành công !!!");
    }

    public function review(Request $request)
    {
        $query = Question::query();
        $users = User::where('major_id', auth()->user()->major_id)
            ->where('role', 1)
            ->where('id', '!=', auth()->id())
            ->get();
        $listQuestions = [];

        foreach ($users as $user) {
            if (\request('search')) {
                $query = $query->where('name', 'LIKE', '%' . $request->search . '%');
                $userQuestions = $query->where('user_id',$user->id)->get();
            }else{
                $userQuestions = $user->questions ;
            }
            foreach ($userQuestions as $userQuestion) {
                $exits = Question::where('name', $userQuestion->name)
                    ->where('user_id', auth()->id())->exists();
                if (!$exits) {
                    array_push($listQuestions, $userQuestion);
                }
            }
        }
        $listQuestions = array_reverse($listQuestions);
        return view('pages.teachers.questions.review', compact('listQuestions'));
    }

    public function add(Question $question, Request $request)
    {
        $exits = Question::where('name', $question->name)
            ->where('user_id', auth()->id())->exists();
        if ($exits) {
            toastr()->error('Câu hỏi đã tồn tại trong kho', 'Lỗi!');
        } else {
            Question::create([
                'name' => $question->name,
                'ans' => $question->ans,
                'options' => $question->options,
                'image' => $question->image,
                'user_id' => auth()->id(),
            ]);
            toastr('Thêm câu hỏi thành công !!');
        }
        return redirect()->route('teachers.questions.review');
    }

    public function addSelected(Request $request){
        $array_id = $request->input('addSelected');

        $questions = Question::whereIn('id', $array_id)->get();

        foreach ($questions as $question) {
            Question::create([
                'name' => $question->name,
                'ans' => $question->ans,
                'options' => $question->options,
                'image' => $question->image,
                'user_id' => auth()->id(),
            ]);
        }
        return json_encode('ok');
    }
}
