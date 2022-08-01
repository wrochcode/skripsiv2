<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilUserModel extends Model
{
    use HasFactory;
    protected $table = 'user_profil';
    protected $fillable = [
        'id_user', 
        'planing', 
        'gender', 
        'age', 
        'height', 
        'weight', 
        'activity',
        'exercise_activity',
    ];
}
