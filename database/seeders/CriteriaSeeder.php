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
            'calorie' => 0.8,
            'fat' => 0.8,
            'carb' => 0.5,
            'protein' => 0.5,
            'keterangan' => 'Criteria untuk mengurangi berat badan',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Maintenance',
            'calorie' => 0.6,
            'fat' => 0.7,
            'carb' => 0.4,
            'protein' => 0.6,
            'keterangan' => 'Criteria untuk mengurangi memertahan berat badan serta membentuk tubuh',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Surplus',
            'calorie' => 0.9,
            'fat' => 0.9,
            'carb' => 0.5,
            'protein' => 0.6,
            'keterangan' => 'Criteria untuk mengurangi menambah berat badan serta membentuk tubuh',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($criteria){
            DB::table('criterias')->insert($criteria);
        });
    }
}
