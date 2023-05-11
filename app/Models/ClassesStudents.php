<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassesStudents extends Model
{
   protected $table = "classes_student";
   protected $fillable = [
       'class_id',
       'user_id',
   ];
    public function user():BelongsTo
    {
   return $this->belongsTo(User::class);
    }

    public function class():BelongsTo
    {
        return $this->belongsTo(Classes::class);
    }
}
