<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('admin.food', [
            'foods' => Food::all(),
        ]);
    }

    public function create(){
        //
    }
    
    public function store(Request $request){
        if($request->calorie == 0){
            $calorie = 0.0;
        }
        else{
            $calorie = $request->calorie;
        }
        if($request->carb == 0){
            $carb = 0.0;
        }
        else{
            $carb = $request->carb;
        }
        if($request->fat == 0){
            $fat = 0.0;
        }
        else{
            $fat = $request->fat;
        }
        if($request->protein == 0){
            $protein = 0.0;
        }
        else{
            $protein = $request->protein;
        }
        Food::create([
                'name'=> $request->name,
                'calorie'=> $calorie,
                'carb'=> $carb,
                'fat'=> $fat,
                'protein'=> $protein,
            ]);
        // Food::create($request->all());
        return redirect('food')->with('success', 'Data berhasil dibuat.');
    }

    public function edit($id){
        $food =Food::find($id);
        return view('admin.__makananedit', [
            'food'=>$food,
        ]);
    }
    
    public function update(Request $request, $id){
        // dd($id);
        Food::find($id)->update([
            'name'=> $request->name,
            'calorie'=> $request->calorie,
            'carb'=> $request->carb,
            'fat'=> $request->fat,
            'protein'=> $request->protein,
        ]);
        return redirect('food');
    }

    public function destroy($id){
        Food::find($id)->delete();
        return back();
    }
}
