<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    use HasFactory;
    protected $table ='student_models';
    protected $fillable = [
        'id',
        'name',
        'department',
        'phone',
        'email',
    ];
}
