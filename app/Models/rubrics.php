<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rubrics extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'rubricID', 'rubricInfo','rubricMark', 'date', 'time'
    ];
    
}
