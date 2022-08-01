<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        // dd(count(User::all()));
        $string = strlen(count(User::all())+1);
        $batas= 5 - $string;
        if($batas == 1){
            $string = "0".count(User::all())+1;
        }
        if($batas == 2){
            $string = "00".count(User::all())+1;
        }
        if($batas == 3){
            $string = "000".count(User::all())+1;
        }
        if($batas == 4){
            $string = "0000".count(User::all())+1;
        }
        // dd($string);
        return view('admin.user', [
            'users' => User::all(),
            'total' => $string,
        ]);
    }

    public function create(){
        //
    }
    
    public function store(RegistrationRequest $request){
        // dd($request);
        User::create($request->all());
        return redirect('user')->with('success', 'Data berhasil dibuat.');
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
