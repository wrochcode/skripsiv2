<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profilneed extends Model
{
    use HasFactory;
    protected $table = 'profilneeds';
    protected $fillable = ['id_user', 'calorie'];
}
