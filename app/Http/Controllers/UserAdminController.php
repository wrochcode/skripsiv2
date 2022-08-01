<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
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
        // $user = DB::table('users')->where('role', 1);
        $admins = User::all();
        $index = 0 ;
        foreach($admins as $admin){
            // echo $admin->role.'<br>';
            if( $admin->role == 2){
                $user[$index]['id'] = $admin->name;
                $user[$index]['name'] = $admin->name;
                $user[$index]['noanggota'] = $admin->nomeranggota;
                $user[$index]['username'] = $admin->username;
                $user[$index]['email'] = $admin->email;
                $user[$index]['address'] = $admin->address;
                $user[$index]['created_at'] = $admin->created_at;
                $index++;
            }
        }
        // dd($user);
        return view('admin.useradmin', [
            'users' => $user,
            'total' => $string,
        ]);
    }

    public function create()
    {
        //
    }
    
    public function store(RegistrationRequest $request)
    {
        // dd($request);
        User::create($request->all());
        return redirect('useradmin')->with('success', 'Data berhasil dibuat.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
