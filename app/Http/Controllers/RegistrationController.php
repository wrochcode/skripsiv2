<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\Profilneed;
use App\Models\ProfilUserModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function create(){
        $namecompany = DB::table('abouts')->where('name', 'namecompany')->first();
        return view('auth.daftar', [
            'namecompany' => $namecompany,
        ]);
    }

    public function store(RegistrationRequest $request){
        // dd($request);
        User::create($request->all());
        $sumuser= count(User::all());
        ProfilUserModel::create([
            'id_user'=> $sumuser,
            'planing' => 0,
            'gender' => 1,
            'age' => 0,
            'height' => 0,
            'weight' => 0,
            'activity' => 0,
            'exercise_activity' => 0,
        ]);
        Profilneed::create([
            'id_user'=> $sumuser,
            'calorie'=> 0,
        ]);

        return redirect('masuk')->with('success', 'Thank you, you are now registered.');
    }
}
