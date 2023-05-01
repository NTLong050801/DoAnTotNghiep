<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
