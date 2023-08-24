<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'enrollment_date',
        'class',
        'email',
        'phone',
    ];

    function subjects(){
        return $this->belongsToMany(\App\Models\Subject::class , 'subscriptions' , 'student_id', 'subject_id' , 'id' , 'id');
    }

    function lessons(){
        return $this->belongsToMany(\App\Models\Lesson::class ,  'attendances' , 'lesson_id' , 'student_id',  'id' , 'id');
    }

}
