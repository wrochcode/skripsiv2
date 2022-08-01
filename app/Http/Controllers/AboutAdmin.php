<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AboutAdmin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userRole = Auth::user()->role;
        if($userRole==1){
            return view('admin.about', [
                'abouts' => About::orderby('id', 'asc')->get(),
            ]);
        }
        return redirect('dashboard');
        // dd($userId);
        
    }

    // public function update(Request $request, $id)
    public function update(AboutRequest $request, $id)
    {
        // DB::table('tasks')->where('id', $id)-> update(['list'=> $request->list]);
        dd($request->name);
        // About::find($id)->update([
        //     'name'=> $request->name,
        //     'value'=> $request->value,
        // ]);
        // return redirect('/aboutadmin')->with('success', 'Data Update');
    }
}
