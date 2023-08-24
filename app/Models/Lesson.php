<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';
    protected $fillable = [
        'teacher_id',
        'date',
    ];

    function students(){
        return $this->belongsToMany(\App\Models\Student::class ,  'attendances' , 'lesson_id' , 'student_id',  'id' , 'id');
    }

    function teacher(){
        return $this->belongsTo(Teacher::class , 'teacher_id' , 'id');
    }

}
