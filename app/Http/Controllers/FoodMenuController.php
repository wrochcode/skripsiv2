<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Foodsmenu;
use App\Models\Fooduser;
use App\Models\Itemsfoodmenu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FoodMenuController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        // identifikasi user
        $alternatif = 0;
        $currentuser = User::find(Auth::user()->id); //get id user

        // Menentukan maksimal -> butuh data
        $Foods = Foodsmenu::all();

        $point = DB::table('criterias')->where('name', 'Defisit')->first();
        $metode = $point->name;
        $poincriteria [1] = 'Kalori: '. strval($point->calorie);
        $poincriteria [2] = ', Lemak: '. strval($point->fat);
        $poincriteria [3] = ', Karbohidrat: '. strval($point->carb);
        $poincriteria [4] = ', Protein: '. strval($point->protein);
        
        
        // dd($currentuser->id);
        foreach($Foods as $Food){
            if($Food->id_user == $currentuser->id){
                $alternatif++;
            }
        }
        $trec = $alternatif;
        if($trec>5){
            $trec=5;
        }

        // dd($alternatif);
        if($alternatif<1){
            $normalisasi = null;
            return view('admin.mainmenu', [
                'foods' => null,
                'recs' => null,
                'fooddatabases' => $Foods,
                'criterias' => $poincriteria,
                'metode' => $metode,
                'trec' => $trec,
            ]);
        }

        $alternatif = 0;
        // dd($Foods);
        foreach($Foods as $Food){
            if($Food->id_user == $currentuser->id){
                $makananuser[$alternatif]['id'] = $Food->id;
                $makananuser[$alternatif]['id_user'] = $Food->id_user;
                $makananuser[$alternatif]['name'] = $Food->name;
                $makananuser[$alternatif]['calorie'] = $Food->calorie;
                $makananuser[$alternatif]['carb'] = $Food->carb;
                $makananuser[$alternatif]['fat'] = $Food->fat;
                $makananuser[$alternatif]['protein'] = $Food->protein;
                $alternatif++;
            }
        }
        
        // ALgorithma start cari max
        $max1 = $makananuser[0]['calorie'];
        $max2 = $makananuser[0]['carb'];
        $max3 = $makananuser[0]['fat'];
        $max4 = $makananuser[0]['protein'];
        for($i=0 ; $i< $trec ; $i++){
            $temp=$makananuser[$i]['calorie'];
            if($temp>$max1){
                $max1=$temp;
            }
            $temp=$makananuser[$i]['carb'];
            if($temp>$max2){
                $max2=$temp;
            }
            $temp=$makananuser[$i]['fat'];
            if($temp>$max3){
                $max3=$temp;
            }
            $temp=$makananuser[$i]['protein'];
            if($temp>$max4){
                $max4=$temp;
            }
        }

        //Normalisasi
        $alternatif = 0;
        $criteria = DB::table('criterias')->where('name', 'Defisit')->first();
        $c1 = $criteria->calorie;
        $c2 = $criteria->carb;
        $c3 = $criteria->fat;
        $c4 = $criteria->protein;

        // dd($makananuser);
        for($i=0 ; $i< $trec ; $i++){
            // dd(1/4);
            if($max1!=0){
                $temp = ($makananuser[$i]['calorie']/$max1)*$c1;
            }
            if($max2!=0){
                $temp = $temp + (($makananuser[$i]['carb']/$max2)*$c2);
            }
            if($max3!=0){
                $temp += (($makananuser[$i]['fat']/$max3)*$c3);
            }
            if($max4!=0){
                $temp += (($makananuser[$i]['protein']/$max4)*$c4);
            }
            
            $normalisasi[$alternatif]['nilai'] = round($temp,4);
            $normalisasi[$alternatif]['id_user'] = $makananuser[$i]['id_user'];
            $normalisasi[$alternatif]['name'] = $makananuser[$i]['name'];
            $normalisasi[$alternatif]['calorie'] = $makananuser[$i]['calorie'];
            $normalisasi[$alternatif]['carb'] = $makananuser[$i]['carb'];
            $normalisasi[$alternatif]['fat'] = $makananuser[$i]['fat'];
            $normalisasi[$alternatif]['protein'] = $makananuser[$i]['protein'];
            $alternatif++;
        }
        
        for($i= 0 ;$i<$trec;$i++){
            for($j=0;$j<$trec-$i-1;$j++){
                if($normalisasi[$j]['nilai']<$normalisasi[$j+1]['nilai']){
                    $temp = $normalisasi[$j]['nilai'];
                    $normalisasi[$j]['nilai'] = $normalisasi[$j+1]['nilai'];
                    $normalisasi[$j+1]['nilai'] = $temp;

                    $temp = $normalisasi[$j]['id_user'];
                    $normalisasi[$j]['id_user'] = $normalisasi[$j+1]['id_user'];
                    $normalisasi[$j+1]['id_user'] = $temp;

                    $temp = $normalisasi[$j]['name'];
                    $normalisasi[$j]['name'] = $normalisasi[$j+1]['name'];
                    $normalisasi[$j+1]['name'] = $temp;

                    $temp = $normalisasi[$j]['calorie'];
                    $normalisasi[$j]['calorie'] = $normalisasi[$j+1]['calorie'];
                    $normalisasi[$j+1]['calorie'] = $temp;

                    $temp = $normalisasi[$j]['carb'];
                    $normalisasi[$j]['carb'] = $normalisasi[$j+1]['carb'];
                    $normalisasi[$j+1]['carb'] = $temp;

                    $temp = $normalisasi[$j]['fat'];
                    $normalisasi[$j]['fat'] = $normalisasi[$j+1]['fat'];
                    $normalisasi[$j+1]['fat'] = $temp;

                    $temp = $normalisasi[$j]['protein'];
                    $normalisasi[$j]['protein'] = $normalisasi[$j+1]['protein'];
                    $normalisasi[$j+1]['protein'] = $temp;
                }
            }
        }
        if($trec>5){
            $trec = 5;
        }
        
        // dd($makananuser);
        return view('admin.mainmenu', [
            'foods' => $makananuser,
            'recs' => $normalisasi,
            'criterias' => $poincriteria,
            'metode' => $metode,
            'trec' => $trec,
        ]);
        // dd($c1, $c2, $c3, $c4, $max1, $max2, $max3, $max4);
        
    }

    public function full(){
        // identifikasi user
        $alternatif = 0;
        $currentuser = User::find(Auth::user()->id); //get id user

        // Menentukan maksimal -> butuh data
        $Foods = Foodsmenu::all();

        $point = DB::table('criterias')->where('name', 'Defisit')->first();
        $metode = $point->name;
        $poincriteria [1] = 'Kalori: '. strval($point->calorie);
        $poincriteria [2] = ', Lemak: '. strval($point->fat);
        $poincriteria [3] = ', Karbohidrat: '. strval($point->carb);
        $poincriteria [4] = ', Protein: '. strval($point->protein);
        
        
        // dd($currentuser->id);
        foreach($Foods as $Food){
            if($Food->id_user == $currentuser->id){
                $alternatif++;
            }
        }
        $trec = $alternatif;
        if($trec>5){
            $trec=5;
        }

        // dd($alternatif);
        if($alternatif<1){
            $normalisasi = null;
            return view('admin.mainmenufull', [
                'foods' => null,
                'recs' => null,
                'fooddatabases' => $Foods,
                'criterias' => $poincriteria,
                'metode' => $metode,
                'trec' => $trec,
            ]);
        }

        $alternatif = 0;
        // dd($Foods);
        foreach($Foods as $Food){
            if($Food->id_user == $currentuser->id){
                $makananuser[$alternatif]['id'] = $Food->id;
                $makananuser[$alternatif]['id_user'] = $Food->id_user;
                $makananuser[$alternatif]['name'] = $Food->name;
                $makananuser[$alternatif]['calorie'] = $Food->calorie;
                $makananuser[$alternatif]['carb'] = $Food->carb;
                $makananuser[$alternatif]['fat'] = $Food->fat;
                $makananuser[$alternatif]['protein'] = $Food->protein;
                $alternatif++;
            }
        }
        
        // ALgorithma start cari max
        $max1 = $makananuser[0]['calorie'];
        $max2 = $makananuser[0]['carb'];
        $max3 = $makananuser[0]['fat'];
        $max4 = $makananuser[0]['protein'];
        for($i=0 ; $i< $trec ; $i++){
            $temp=$makananuser[$i]['calorie'];
            if($temp>$max1){
                $max1=$temp;
            }
            $temp=$makananuser[$i]['carb'];
            if($temp>$max2){
                $max2=$temp;
            }
            $temp=$makananuser[$i]['fat'];
            if($temp>$max3){
                $max3=$temp;
            }
            $temp=$makananuser[$i]['protein'];
            if($temp>$max4){
                $max4=$temp;
            }
        }

        //Normalisasi
        $alternatif = 0;
        $criteria = DB::table('criterias')->where('name', 'Defisit')->first();
        $c1 = $criteria->calorie;
        $c2 = $criteria->carb;
        $c3 = $criteria->fat;
        $c4 = $criteria->protein;

        // dd($makananuser);
        for($i=0 ; $i< $trec ; $i++){
            // dd(1/4);
            if($max1!=0){
                $temp = ($makananuser[$i]['calorie']/$max1)*$c1;
            }
            if($max2!=0){
                $temp = $temp + (($makananuser[$i]['carb']/$max2)*$c2);
            }
            if($max3!=0){
                $temp += (($makananuser[$i]['fat']/$max3)*$c3);
            }
            if($max4!=0){
                $temp += (($makananuser[$i]['protein']/$max4)*$c4);
            }
            
            $normalisasi[$alternatif]['nilai'] = round($temp,4);
            $normalisasi[$alternatif]['id_user'] = $makananuser[$i]['id_user'];
            $normalisasi[$alternatif]['name'] = $makananuser[$i]['name'];
            $normalisasi[$alternatif]['calorie'] = $makananuser[$i]['calorie'];
            $normalisasi[$alternatif]['carb'] = $makananuser[$i]['carb'];
            $normalisasi[$alternatif]['fat'] = $makananuser[$i]['fat'];
            $normalisasi[$alternatif]['protein'] = $makananuser[$i]['protein'];
            $alternatif++;
        }
        
        for($i= 0 ;$i<$trec;$i++){
            for($j=0;$j<$trec-$i-1;$j++){
                if($normalisasi[$j]['nilai']<$normalisasi[$j+1]['nilai']){
                    $temp = $normalisasi[$j]['nilai'];
                    $normalisasi[$j]['nilai'] = $normalisasi[$j+1]['nilai'];
                    $normalisasi[$j+1]['nilai'] = $temp;

                    $temp = $normalisasi[$j]['id_user'];
                    $normalisasi[$j]['id_user'] = $normalisasi[$j+1]['id_user'];
                    $normalisasi[$j+1]['id_user'] = $temp;

                    $temp = $normalisasi[$j]['name'];
                    $normalisasi[$j]['name'] = $normalisasi[$j+1]['name'];
                    $normalisasi[$j+1]['name'] = $temp;

                    $temp = $normalisasi[$j]['calorie'];
                    $normalisasi[$j]['calorie'] = $normalisasi[$j+1]['calorie'];
                    $normalisasi[$j+1]['calorie'] = $temp;

                    $temp = $normalisasi[$j]['carb'];
                    $normalisasi[$j]['carb'] = $normalisasi[$j+1]['carb'];
                    $normalisasi[$j+1]['carb'] = $temp;

                    $temp = $normalisasi[$j]['fat'];
                    $normalisasi[$j]['fat'] = $normalisasi[$j+1]['fat'];
                    $normalisasi[$j+1]['fat'] = $temp;

                    $temp = $normalisasi[$j]['protein'];
                    $normalisasi[$j]['protein'] = $normalisasi[$j+1]['protein'];
                    $normalisasi[$j+1]['protein'] = $temp;
                }
            }
        }
        
        // dd($makananuser);
        return view('admin.mainmenufull', [
            'foods' => $makananuser,
            'recs' => $normalisasi,
            'criterias' => $poincriteria,
            'metode' => $metode,
            'trec' => $trec,
        ]);
    }
    
    public function create(Request $request){
        
        $currentuser = User::find(Auth::user()->id); //get id user
        Foodsmenu::create([
            'id_user'=> $currentuser->id,
            'name'=> $request->name,
            'calorie'=> $request->calorie,
            'carb'=> $request->carb,
            'fat'=> $request->fat,
            'protein'=> $request->protein,
        ]);
        return  redirect('foodmenu')->with('success', 'Data berhasil dibuat.');
    }

    public function detail($id){
        // mencari data
        // dd($id);
        $useradmin = Auth::user()->id;
        $idmenu = $id;
        // dd($idmenu);
        // Menentukan maksimal -> butuh data
        $Foods = Itemsfoodmenu::all();
        $calorie = 0 ;
        $carb = 0 ;
        $fat = 0 ;
        $protein = 0 ;

        $index = 0 ;
        foreach($Foods as $food){
            if($food->id_user == $useradmin && $food->id_menu == $id){
                $fooduser[$index]['name'] = $food->name;
                $fooduser[$index]['id'] = $food->id;
                $fooduser[$index]['calorie'] = $food->calorie;
                $calorie += $food->calorie;
                $fooduser[$index]['carb'] = $food->carb;
                $carb += $food->carb;
                $fooduser[$index]['fat'] = $food->fat;
                $fat += $food->fat;
                $fooduser[$index]['protein'] = $food->protein;
                $protein += $food->protein;
                $index++;
            }
        }

        if($index == 0){
            $fooduser = null;
        }

        $database = DB::table('foodsmenu')->where('id', $idmenu)->first();

        Foodsmenu::find($idmenu)->update([
            'name'=> $database->name,
            'calorie'=> $calorie,
            'carb'=> $carb,
            'fat'=> $fat,
            'protein'=> $protein,
        ]);
        return view('admin.menudetailitems', [
            'foods' => $fooduser,
            'idmenu' => $idmenu,
            'trec' => $index,
            'fooddatabases' => Food::all(),
        ]);
    }
    
    public function store(Request $request){
        $request->validate([
            'name'=>['required', 'min:3', 'string'],
        ]);
        $currentuser = User::find(Auth::user()->id);
        Foodsmenu::create([
                'id_user'=> $currentuser->id,
                'name'=> $request->name,
                'calorie'=> $request->calorie,
                'carb'=> $request->carb,
                'fat'=> $request->fat,
                'protein'=> $request->protein,
            ]);
        // Food::create($request->all());
        return redirect('foodmenu')->with('success', 'Data berhasil dibuat.');
    }

    public function tambah(Request $request){
        $request->validate([
            'name'=>['required', 'min:3', 'string'],
            'calorie'=>['required', 'numeric'],
            'carb'=>['required', 'numeric'],
            'fat'=>['required', 'numeric'],
            'protein'=>['required','numeric'],
        ]);
        // dd($request->idmenu);
        $currentuser = User::find(Auth::user()->id);
        Itemsfoodmenu::create([
                'id_user'=> $currentuser->id,
                'id_menu'=> $request->idmenu,
                'name'=> $request->name,
                'calorie'=> $request->calorie,
                'carb'=> $request->carb,
                'fat'=> $request->fat,
                'protein'=> $request->protein,
            ]);
        // Food::create($request->all());
        return redirect()->route('foodmenu.detail', ['id' => $request->idmenu])->with('success', 'Data berhasil ditambahkan.');
    }
    public function add(Request $request){
        // dd($request->iditem);
        $id = $request->iditem;
        $currentuser = User::find(Auth::user()->id);
        $food =Food::find($id);
        // dd($food);
        Itemsfoodmenu::create([
                'id_user'=> $currentuser->id,
                'id_menu'=> $request->idmenu,
                'name'=> $food->name,
                'calorie'=> $food->calorie,
                'carb'=> $food->carb,
                'fat'=> $food->fat,
                'protein'=> $food->protein,
            ]);
        return redirect()->route('foodmenu.detail', ['id' => $request->idmenu])->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id){
        $food =Fooduser::find($id);
        return view('admin.__makananedit', [
            'food'=>$food,
        ]);
    }

    public function destroy($id){
        // dd($id);
        Foodsmenu::find($id)->delete();
        // $food = DB::table('foodsmenu')->where('id', $id)->first();

        return  redirect('foodmenu');
    }

    public function hapus($id){
        $menu = Itemsfoodmenu::find($id);
        // dd($menu->name);
        Itemsfoodmenu::find($id)->delete();
        return back()->with('danger', $menu->name." berhasil dihapus");
    }
}
