<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'id', 'Date', 'Time','Title', 'Description'
    ];
    
}
