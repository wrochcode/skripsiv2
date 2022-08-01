<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodsmenu extends Model
{
    use HasFactory;
    protected $table = 'foodsmenu';
    protected $fillable = ['id_user', 'name', 'calorie', 'carb', 'fat', 'protein'];
}
