<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class psmuser extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'psm_id', 'userID', 'psm_type'
    ];
    
}
