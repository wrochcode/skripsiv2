<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodMenuRecModel extends Model
{
    use HasFactory;
    protected $table = 'foodmenurecs';
    protected $fillable = ['name', 'calorie', 'carb', 'fat', 'protein'];
}
