<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\ExamsStudents;
use Illuminate\Http\Request;

class ResultsContrller extends Controller
{
    public function index(Request $request){
        $examStudents = ExamsStudents::where('id_user',auth()->id())
            ->where('isActive',1)->whereNotNull('result')
            ->get();
        return view('pages.students.results.index',compact('examStudents'));
    }
}
