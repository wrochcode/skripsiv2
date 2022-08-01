<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodMenuRecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([[
            'name' => "menu rec A",
            'calorie' => 1000,
            'fat' => 150,
            'carb' => 135,
            'protein' => 45,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => "menu rec B",
            'calorie' => 1200,
            'fat' => 100,
            'carb' => 80,
            'protein' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($data){
            DB::table('foodmenurecs')->insert($data);
        });
    }
}
