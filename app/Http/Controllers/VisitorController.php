<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $useradmin = Auth::user()->name;
        
        // dd($user);
        return view('admin.visit', [
            'visits' => Visit::orderBy('id', 'desc')->get(),
            'admin' => $useradmin,
        ]);
    }
    
    public function store(Request $request){

        $request->validate([
            'day'=>['required', 'min:3', 'date'],
            'visitor'=>['required', 'min:3', 'integer'],
            'student'=>['required', 'min:3', 'integer'],
        ]);

        $data1 = $request->visitor;
        $data2 = $request->student;
        $data = (($data1-$data2)*8000)+($request->student*5000);
        $currentuser = User::find(Auth::user()->id);
        // dd($currentuser->name);
        Visit::create([
            'responsibility'=> $currentuser->name,
            'day'=> $request->day,
            'visitor'=> $request->visitor,
            'student'=> $request->student,
            'reguler'=> $request->visitor-$request->student,
            'money'=> $data,
        ]);

        return redirect('visit')->with('success', 'Data Visitor has success added.');
    }
}
