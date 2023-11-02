<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table ='exams';
    protected $fillable =[
        'exam_title',
        'exam_type',
        'marks',
        'duration',
        'exam_date',

    ];
}
