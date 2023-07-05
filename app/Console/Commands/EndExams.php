<?php

namespace App\Console\Commands;

use App\Events\ActiveChanged;
use App\Models\Exam;
use App\Models\ExamsStudents;
use App\Models\Question;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class EndExams extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teacher:end-exams';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $currentDate = Carbon::today();
        $exams = Exam::where('date_end', '<', $currentDate)->get();
        foreach ($exams as $exam){
            $exam->update([
                'is_end' => true
            ]);
            $exam_students = ExamsStudents::where('exam_id', $exam->id)->get();
            //dd($exam_students);
            foreach ($exam_students as $exam_student) {
                if ($exam_student->questions != null) {
                    $questions = json_decode($exam_student->questions);
                    $answers = json_decode($exam_student->answers);
                    $dem = 0;
                    foreach ($questions as $key => $question) {
                        if (Question::find($question)->ans == $answers[$key]) {
                            $dem += 1;
                        }
                    }
                    $exam_student->update([
                        'result' => $dem,
                    ]);
                }

                if ($exam_student->questions == null) {
                    $exam_student->update([
                        'result' => 0,
                        'isActive' => true
                    ]);
                }
            }
            event(new ActiveChanged($exam->id));
        }
    }
}
