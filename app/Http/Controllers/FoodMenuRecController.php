<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodMenuRecModel;
use App\Models\Fooduser;
use App\Models\Itemsfoodmenurec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodMenuRecController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        // identifikasi user
        $alternatif = 0;
        // $currentuser = User::find(Auth::user()->id); //get id user

        // Menentukan maksimal -> butuh data
        $Foods = FoodMenuRecModel::all();

        $point = DB::table('criterias')->where('name', 'Defisit')->first();
        $metode = $point->name;
        $poincriteria [1] = 'Kalori: '. strval($point->calorie);
        $poincriteria [2] = ', Lemak: '. strval($point->fat);
        $poincriteria [3] = ', Karbohidrat: '. strval($point->carb);
        $poincriteria [4] = ', Protein: '. strval($point->protein);
        
        
        // dd($currentuser->id);
        foreach($Foods as $Food){
            $alternatif++;
        }
        $trec = $alternatif;
        if($trec>5){
            $trec=5;
        }

        // dd($alternatif);
        if($alternatif<1){
            $normalisasi = null;
            return view('admin.mainmenurec', [
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
            $makananuser[$alternatif]['id'] = $Food->id;
            $makananuser[$alternatif]['name'] = $Food->name;
            $makananuser[$alternatif]['calorie'] = $Food->calorie;
            $makananuser[$alternatif]['carb'] = $Food->carb;
            $makananuser[$alternatif]['fat'] = $Food->fat;
            $makananuser[$alternatif]['protein'] = $Food->protein;
            $alternatif++;
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
        return view('admin.mainmenurec', [
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

        // Menentukan maksimal -> butuh data
        $Foods = FoodMenuRecModel::all();

        $point = DB::table('criterias')->where('name', 'Defisit')->first();
        $metode = $point->name;
        $poincriteria [1] = 'Kalori: '. strval($point->calorie);
        $poincriteria [2] = ', Lemak: '. strval($point->fat);
        $poincriteria [3] = ', Karbohidrat: '. strval($point->carb);
        $poincriteria [4] = ', Protein: '. strval($point->protein);
        
        
        // dd($currentuser->id);
        foreach($Foods as $Food){
            $alternatif++;
        }
        $trec = $alternatif;
        if($trec>5){
            $trec=5;
        }

        // dd($alternatif);
        if($alternatif<1){
            $normalisasi = null;
            return view('admin.mainmenufullrec', [
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
            $makananuser[$alternatif]['id'] = $Food->id;
            $makananuser[$alternatif]['name'] = $Food->name;
            $makananuser[$alternatif]['calorie'] = $Food->calorie;
            $makananuser[$alternatif]['carb'] = $Food->carb;
            $makananuser[$alternatif]['fat'] = $Food->fat;
            $makananuser[$alternatif]['protein'] = $Food->protein;
            $alternatif++;
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
        return view('admin.mainmenufullrec', [
            'foods' => $makananuser,
            'recs' => $normalisasi,
            'criterias' => $poincriteria,
            'metode' => $metode,
            'trec' => $trec,
        ]);
        // dd($c1, $c2, $c3, $c4, $max1, $max2, $max3, $max4);
        
    }
    
    public function create(Request $request){
        FoodMenuRecModel::create([
            'name'=> $request->name,
            'calorie'=> $request->calorie,
            'carb'=> $request->carb,
            'fat'=> $request->fat,
            'protein'=> $request->protein,
        ]);
        return  redirect('foodmenurec')->with('success', 'Data berhasil dibuat.');
    }

    public function detail($id){
        $idmenu = $id;
        // dd($idmenu);
        // Menentukan maksimal -> butuh data
        $Foods = Itemsfoodmenurec::all();
        $calorie = 0 ;
        $carb = 0 ;
        $fat = 0 ;
        $protein = 0 ;

        $index = 0 ;
        foreach($Foods as $food){
            if($food->id_menu == $id){
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

        $database = DB::table('foodmenurecs')->where('id', $idmenu)->first();

        FoodMenuRecModel::find($idmenu)->update([
            'name'=> $database->name,
            'calorie'=> $calorie,
            'carb'=> $carb,
            'fat'=> $fat,
            'protein'=> $protein,
        ]);
        return view('admin.menudetailitemsrec', [
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
        FoodMenuRecModel::create([
                'name'=> $request->name,
                'calorie'=> $request->calorie,
                'carb'=> $request->carb,
                'fat'=> $request->fat,
                'protein'=> $request->protein,
            ]);
        // Food::create($request->all());
        return redirect('foodmenurec')->with('success', 'Data berhasil dibuat.');
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
        Itemsfoodmenurec::create([
                'id_menu'=> $request->idmenu,
                'name'=> $request->name,
                'calorie'=> $request->calorie,
                'carb'=> $request->carb,
                'fat'=> $request->fat,
                'protein'=> $request->protein,
            ]);
        // Food::create($request->all());
        return redirect()->route('foodmenurec.detail', ['id' => $request->idmenu])->with('success', 'Data berhasil ditambahkan.');
    }
    
    public function add(Request $request){
        // dd($request->iditem);
        $id = $request->iditem;
        $food =Food::find($id);
        // dd($food);
        Itemsfoodmenurec::create([
                'id_menu'=> $request->idmenu,
                'name'=> $food->name,
                'calorie'=> $food->calorie,
                'carb'=> $food->carb,
                'fat'=> $food->fat,
                'protein'=> $food->protein,
            ]);
        return redirect()->route('foodmenurec.detail', ['id' => $request->idmenu])->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id){
        $food =Fooduser::find($id);
        return view('admin.__makananedit', [
            'food'=>$food,
        ]);
    }

    public function destroy($id){
        // dd($id);
        FoodMenuRecModel::find($id)->delete();
        // $food = DB::table('foodsmenu')->where('id', $id)->first();

        return  redirect('foodmenu');
    }

    public function hapus($id){
        $menu = Itemsfoodmenurec::find($id);
        // dd($menu->name);
        Itemsfoodmenurec::find($id)->delete();
        return back()->with('danger', $menu->name." berhasil dihapus");
    }
}
