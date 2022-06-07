<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'Student_ID', 'Date', 'Time','Title', 'Description'
    ];
    
}
