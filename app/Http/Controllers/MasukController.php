<?php

namespace App\Http\Controllers;

use App\Models\LogActivities;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class MasukController extends Controller
{
    public function create(){
        $namecompany = DB::table('abouts')->where('name', 'namecompany')->first();
        return view('auth.masuk',[
            'namecompany' => $namecompany,
        ]);
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'],
        ]);
        
        if(Auth::attempt($attributes)){
            $user = DB::table('users')->where('email', $request->email)->first();
            // dd($user);
            LogActivities::create([
                'id_user'=> $user->id,
            ]);
            if(Auth::user()->role == 3){
                return redirect('myaccount')->with('success', 'You are now logded in');
            }else{
                return redirect('dashboard');
            }
        }

        throw ValidationException::withMessages([
            'email' => 'Your provide credential is not match our records.',
        ]);
    }
}
