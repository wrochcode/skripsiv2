<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemsfoodmenu extends Model
{
    use HasFactory;
    protected $table = 'itemsfoodmenu';
    protected $fillable = ['id_user', 'id_menu', 'name', 'calorie', 'carb', 'fat', 'protein'];
}
