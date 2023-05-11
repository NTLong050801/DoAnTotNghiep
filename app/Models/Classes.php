<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $fillable = [
        'name',
        'teacher_id',
    ];
    public function user(){
        return $this->belongsToMany(User::class, 'classes_student', 'class_id', 'user_id');
    }
}
