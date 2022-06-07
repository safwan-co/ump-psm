<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rankings extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'Student_ID', 'student_grade', 'student_ranking'
    ];
    
}
