<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $guarded = "id";
    protected $fillable = [
        'name',
        'email',
        'password',
        'identifier',
        'role',
        'major_id',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function majors():HasMany
    {
        return $this->hasMany(Major::class,'id','major_id');
    }


    protected function avatar(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (empty($this->avatar)) {
                    return (new \Laravolt\Avatar\Avatar)->create($this->name)->toBase64();
                }
                return $this->attributes['avatar'];
            }
        );
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
    public function major()
    {
        return $this->belongsTo(Major::class,'major_id');
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
    public function classes(){
        return $this->belongsToMany(Classes::class, 'classes_student', 'user_id', 'class_id');
    }
    public function exames(){
        return $this->belongsToMany(Exam::class, 'exams_student', 'id_user', 'exam_id');
    }

    public static function result(string $exam_id , string $user_id){
        return ExamsStudents::where('exam_id',$exam_id)
            ->where('id_user',$user_id)->first();
    }
}
