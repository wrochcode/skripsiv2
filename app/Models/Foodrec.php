<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodrec extends Model
{
    use HasFactory;
    protected $table = 'foodrecs';
    protected $fillable = ['name', 'calorie', 'carb', 'fat', 'protein'];
}
