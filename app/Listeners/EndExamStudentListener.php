<?php

namespace App\Listeners;

use App\Events\EndExamStudent;
use App\Models\ExamsStudents;
use App\Models\Question;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EndExamStudentListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EndExamStudent $event): void
    {
        $user_id = $event->user_id;
        $exam_id = $event->exam_id;
        $myExam = ExamsStudents::where('exam_id',$exam_id)->where('id_user',$user_id)->first();
        $questions = json_decode($myExam->questions);
        $answers = json_decode($myExam->answers);
        $dem = 0;
        foreach ($questions as $key=>$question){
            if (Question::find($question)->ans == $answers[$key]){
                $dem+=1;
            }
        }
        $myExam->update([
            'result' => $dem,
        ]);
    }
}
