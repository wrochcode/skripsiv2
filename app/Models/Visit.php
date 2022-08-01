<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;protected $table = 'visitors';
    protected $fillable = [
        'responsibility', 
        'day', 
        'visitor', 
        'student', 
        'reguler', 
        'money',
    ];
}
