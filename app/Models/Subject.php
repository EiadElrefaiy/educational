<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $fillable = [
        'name',
    ];

    function students(){
        return $this->belongsToMany(\App\Models\Student::class , 'subscriptions' , 'student_id', 'subject_id' , 'id' , 'id');
    }

    function teachers(){
        return $this->hasMany(Teacher::class , 'subject_id' , 'id');
    }


}
