<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        collect([[
            // 'id_user' => 1,
            'id_user' => 1,
            'planing' => 1,
            'gender' => 1,
            'age' => 34,
            'height' => 170,
            'weight' => 70,
            'activity' => 3,
            'exercise_activity' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'id_user' => 2,
            // 'id_user' => 2,
            'planing' => 1,
            'gender' => 1,
            'age' => 28,
            'height' => 170,
            'weight' => 70,
            'activity' => 3,
            'exercise_activity' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            // 'id_user' => 3,
            'id_user' => 3,
            'planing' => 1,
            'gender' => 1,
            'age' => 22,
            'height' => 169,
            'weight' => 58,
            'activity' => 3,
            'exercise_activity' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($data){
            // About::create($about);
            DB::table('user_profil')->insert($data);
        });
    }
}
