<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dp extends Model
{
    use HasFactory;
    protected $table ='dps';
    protected $fillable = [
        'department_initial',
        'department_name',
        'no_of_students',
        'no_of_faculties'
    ];
}
