<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Major extends Model
{
    use HasFactory,Searchable;
    protected $table = "majors";
    protected $fillable = [
        'name'
    ];
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }
}
