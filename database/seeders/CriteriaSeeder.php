<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([[
            'name' => 'Defisit',
            'calorie' => 0.35,
            'fat' => 0.2,
            'carb' => 0.18,
            'protein' => 0.3,
            'keterangan' => 'Criteria untuk mengurangi berat badan',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Maintenance',
            'calorie' => 0.39,
            'fat' => 0.22,
            'carb' => 0.2,
            'protein' => 0.31,
            'keterangan' => 'Criteria untuk mengurangi memertahan berat badan serta membentuk tubuh',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Surplus',
            'calorie' => 0.45,
            'fat' => 0.32,
            'carb' => 0.23,
            'protein' => 0.36,
            'keterangan' => 'Criteria untuk mengurangi menambah berat badan serta membentuk tubuh',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($criteria){
            DB::table('criterias')->insert($criteria);
        });
    }
}
