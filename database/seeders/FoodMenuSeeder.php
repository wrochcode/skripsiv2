<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([[
            'id_user' => 1,
            'name' => "menu A",
            'calorie' => 1000,
            'fat' => 150,
            'carb' => 135,
            'protein' => 45,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'id_user' => 1,
            'name' => "menu B",
            'calorie' => 1200,
            'fat' => 100,
            'carb' => 80,
            'protein' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($data){
            DB::table('foodsmenu')->insert($data);
        });
    }
}
