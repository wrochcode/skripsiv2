<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivities extends Model
{
    use HasFactory;
    protected $table = 'logactivities';
    protected $fillable = ['id_user'];
}
