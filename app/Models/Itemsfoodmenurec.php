<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemsfoodmenurec extends Model
{
    use HasFactory;
    protected $table = 'itemsfoodmenurec';
    protected $fillable = ['id_menu', 'name', 'calorie', 'carb', 'fat', 'protein'];
}
