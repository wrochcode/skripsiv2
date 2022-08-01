<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Profilneedseeder extends Seeder
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
            'calorie' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'id_user' => 2,
            'calorie' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'id_user' => 3,
            'calorie' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($data){
            // About::create($about);
            DB::table('profilneeds')->insert($data);
        });
    }
}
