<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rubrics extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'rubricID', 'userID', 'rubricInfo','rubricMark', 'coordinator_ID', 'coordinatorName', 'date', 'time'
    ];
    
}
