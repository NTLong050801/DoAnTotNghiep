<?php

use App\Models\ExamsStudents;

if (!function_exists('myExam')) {
     function myExam(string $exam_id,string $user_id){
        return ExamsStudents::where('exam_id',$exam_id)
            ->where('id_user',$user_id)->first();
    }
};
