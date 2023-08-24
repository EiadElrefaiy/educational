<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = [
        'name',
        'subject_id',
        'email',
        'phone',
    ];

    function subjects(){
        return $this->belongsTo(Subject::class , 'subject_id' , 'id');
    }

    function lessons(){
        return $this->hasMany(Lesson::class , 'teacher_id' , 'id');
    }

}
