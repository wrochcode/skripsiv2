<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CreateMemberController extends Controller
{
    public function index()
    {
        return view('admin.user', [
            'Users' => User::get(),
        ]);
    }
}
