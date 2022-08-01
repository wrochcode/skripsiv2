<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemFoodsMenuSeeder extends Seeder
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
            'id_menu' => 1,
            'name' => 'food1',
            'calorie' => 1000,
            'fat' => 150,
            'carb' => 135,
            'protein' => 45,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'id_user' => 1,
            'id_menu' => 1,
            'name' => 'food1',
            'calorie' => 1200,
            'fat' => 100,
            'carb' => 80,
            'protein' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'id_user' => 1,
            'id_menu' => 2,
            'name' => 'food2',
            'calorie' => 1800,
            'fat' => 200,
            'carb' => 180,
            'protein' => 60,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'id_user' => 1,
            'id_menu' => 2,
            'name' => 'food2',
            'calorie' => 1900,
            'fat' => 100,
            'carb' => 80,
            'protein' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'id_user' => 1,
            'id_menu' => 2,
            'name' => 'food2',
            'calorie' => 1800,
            'fat' => 200,
            'carb' => 180,
            'protein' => 60,
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($data){
            DB::table('itemsfoodmenu')->insert($data);
        });
    }
}
