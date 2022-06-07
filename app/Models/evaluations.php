<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluations extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'student_id', 'student_name', 'psm_title','psm_type', 'supervisor_name', 'psm1_mark', 'psm2_mark'
    ];
    
}
