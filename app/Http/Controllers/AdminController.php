<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $useradmin = Auth::user()->role;
        $event = DB::table('events')->latest('id')->first();
        if($useradmin != 3){
            $namecompany = DB::table('abouts')->where('name', 'namecompany')->first();
            return view('admin.admin',[
                'namecompany' => $namecompany,
                'visits' => Visit::orderBy('id', 'desc')->get(),
                'event' => $event->name,
                'value' => $event->value,
            ]);
        }
        
        // $iduser = Auth::user();
        $iduser = Auth::user()->id;
        // dd($iduser);
        $user = DB::table('user_profil')->where('id_user', $iduser)->first();
        
        
        //kalkulator sehat
        //bmi
        if($user->age != 0 && $user->height != 0 && $user->weight != 0){
            $temp = ($user->height/100) * ($user->height/100);
            // dd($temp);
            $kalkulator['bmi'] = round(  $user->weight / $temp,1);
            if($kalkulator['bmi']<16){
                $kalkulator['descbmi'] = 'Terlalu Kurus';
            }elseif($kalkulator['bmi'] <17){
                $kalkulator['descbmi'] = 'Cukup Kurus';
            }elseif($kalkulator['bmi'] < 18.5){
                $kalkulator['descbmi'] = 'sedikit Kurus';
            }elseif($kalkulator['bmi'] < 25){
                $kalkulator['descbmi'] = 'Normal';
            }elseif($kalkulator['bmi'] < 30){
                $kalkulator['descbmi'] = 'Gemuk';
            }elseif(['bmi'] < 35){
                $kalkulator['descbmi'] = 'Obesitas  Kelas I';
            }elseif($kalkulator['bmi'] <= 40){
                $kalkulator['descbmi'] = 'Obesitas  Kelas II';
            }elseif($kalkulator['bmi'] > 40 ){
                $kalkulator['descbmi'] = 'Obesitas  Kelas III';
            }
        }else{
            $kalkulator['bmi'] = 0;
            $kalkulator['descbmi'] = 'Kategori Berat error';
        }

        //rmr
        if($user->age != 0 && $user->height != 0 && $user->weight != 0){
            $temp = ($user->height/100) * ($user->height/100);
            // dd($temp);
            if($user->gender == 1){
                $temp = (88.362+(13.397 * $user->weight) + (4.799 * $user->height) - (5.677 * $user->age));
            }else{
                $temp = (447.593 + (9.247 * $user->weight) + (3.098 * $user->height) - (4.330 * $user->age));
            }
            $kalkulator['rmr'] = round( $temp,0);
        }else{
            $kalkulator['rmr'] = 0;
        }

        //eer
        // normalisasi activitie
        if($user->activity == 1){
            $temp = 1;
        }elseif($user->activity == 2 && $user->gender ==1){
            $temp = 1.11;
        }elseif($user->activity == 2 && $user->gender ==2){
            $temp = 1.12;
        }elseif($user->activity == 3 && $user->gender ==1){
            $temp = 1.25;
        }elseif($user->activity == 3 && $user->gender ==2){
            $temp = 1.27;
        }elseif($user->activity == 4 && $user->gender ==1){
            $temp = 1.48;
        }elseif($user->activity == 4 && $user->gender ==2){
            $temp = 1.45;
        }
        
        if($user->age != 0 && $user->height != 0 && $user->weight != 0){
            if($user->gender == 1){
                $temp = (662-(9.53 * $user->age) + ($temp *((15.91*$user->weight)+(539.6*($user->height/100))) ));
            }else{
                $temp = (354-(6.91 * $user->age) + ($temp *((9.36*$user->weight)+(726*($user->height/100))) ));
            }
            $kalkulator['eer'] = round( $temp,2);
        }else{
            $kalkulator['eer'] = 0;
        }
        
        // tdee
        // normalisasi activitie
        if($user->exercise_activity == 1){
            $temp = 1.2;
        }elseif($user->exercise_activity == 2){
            $temp = 1.375;
        }elseif($user->exercise_activity == 3){
            $temp = 1.55;
        }elseif($user->exercise_activity == 4){
            $temp = 1.725;
        }elseif($user->exercise_activity == 5){
            $temp = 1.9;
        }else{
            $temp = null;
        }
        // dd($temp);
        if($user->age != 0 && $user->height != 0 && $user->weight != 0 && $user->exercise_activity != 0){
            if($user->gender == 1){
                $temp *= (66.5+(13.7 * $user->weight) + ((5*$user->height)-($user->age*6.8)));
            }else{
                $temp *= (655+(9.6 * $user->weight) + ((1.8*$user->height)-($user->age*4.7)));
            }
            $kalkulator['tdee'] = round( $temp,1);
        }else{
            $kalkulator['tdee'] = 0;
        }
        
        // Serat
        $kalkulator['serat'] = ($kalkulator['tdee']/1000) * 14;
        
        // Protein
        $temp1 = round(($kalkulator['tdee']*0.1),0);
        $temp2 = round(($kalkulator['tdee']*0.15),0);
        $kalkulator['protein'] = "(".$temp1." - ". $temp2." kcal)";
        $temp3 = round((($kalkulator['tdee']*0.1)/4),0);
        $temp4 = round((($kalkulator['tdee']*0.15)/4),0);
        $kalkulator['proteingram'] = $temp3." - ". $temp4." gram";
        
        // karbohidrat
        $temp1 = round($kalkulator['tdee']*0.6,0);
        $temp2 = round($kalkulator['tdee']*0.75,0);
        $kalkulator['carb'] = "(".$temp1." - ". $temp2." kcal)";
        $temp3 = round((($kalkulator['tdee']*0.6)/4),0);
        $temp4 = round((($kalkulator['tdee']*0.75)/4),0);
        $kalkulator['carbgram'] = $temp3." - ". $temp4." gram";

        // dd($kalkulator['tdee']);
        // Lemak
        $temp1 = round(($kalkulator['tdee']*0.1),2);
        $temp2 = round(($kalkulator['tdee']*0.25),2);
        $kalkulator['fat'] = "(".$temp1." - ". $temp2." kcal)";
        $temp3 = round(($kalkulator['tdee']*0.1)/9,2);
        $temp4 = round(($kalkulator['tdee']*0.25)/9,2);
        $kalkulator['fatgram'] = $temp3." - ". $temp4." gram";

        // dd($kalkulator);
        // normalisasi user
        if($user->gender == 1){
            $user->gender = 'Laki - Laki';
        }else{
            $user->gender = 'Perempuan';
        }
        return view('admin.userdashboard',[
            'event' => $event->name,
            'value' => $event->value,
            'kalkulator' => $kalkulator,
            'profiluser' => $user,
            ]);    
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
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
    
    public function destroy($id){
        //
    }
}
