<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FoodrecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        collect([[
            'name' => 'Dada Ayam 100 gram (g)',
            'calorie' => 195,
            'carb' => 0,
            'fat' => 7.72,
            'protein' => 29.65,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Bakso Daging Sapi (1 Mangkok)',
            'calorie' => 283,
            'carb' => 10.61,
            'fat' => 18.43,
            'protein' => 17.37,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Bakso dengan Saus 100 gram (g)',
            'calorie' => 189,
            'fat' => 12.28,
            'carb' => 0.26,
            'protein' => 18.04,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Tahu Bakso (1 potong)',
            'calorie' => 77,
            'fat' => 4.04,
            'carb' => 7.12,
            'protein' => 3.93,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Tahu Goreng 1 buah',
            'calorie' => 35,
            'fat' => 2.62,
            'carb' => 1.36,
            'protein' => 2.23,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Tempe mendoan 100 gram(g)',
            'calorie' => 200,
            'fat' => 12.78,
            'carb' => 12.69,
            'protein' => 11.18,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Tempe mendoan 1 potong',
            'calorie' => 60,
            'fat' => 3.83,
            'carb' => 3.81,
            'protein' => 3.63,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Tahu  100 gram(g)',
            'calorie' => 78,
            'fat' => 4.95,
            'carb' => 2.1,
            'protein' => 7.97,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Tahu Goreng  1 buah',
            'calorie' => 35,
            'fat' => 2.62,
            'carb' => 1.36,
            'protein' => 2.23,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Tahu Goreng   100 gram(g)',
            'calorie' => 271,
            'fat' => 20.18,
            'carb' => 10.49,
            'protein' => 17.19,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Tahu Goreng   100 gram(g)',
            'calorie' => 271,
            'fat' => 20.18,
            'carb' => 10.49,
            'protein' => 17.19,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Sambal Goreng   1 sdm',
            'calorie' => 15,
            'fat' => 0.41,
            'carb' => 1.56,
            'protein' => 1.37,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Sambal Goreng kentang  100 gram(g)',
            'calorie' => 102,
            'fat' => 3.02,
            'carb' => 10.15,
            'protein' => 8.72,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Sambal Goreng kentang  1 porsi(50 g)',
            'calorie' => 51,
            'fat' => 1.51,
            'carb' => 5.07,
            'protein' => 4.36,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Perkedel kentang 1 potong',
            'calorie' => 21,
            'fat' => 1.12,
            'carb' => 2.48,
            'protein' => 0.46,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'KFC perkedel',
            'calorie' => 105,
            'fat' => 5,
            'carb' => 9.6,
            'protein' => 5.39,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Kuning telur 1 besar',
            'calorie' => 55,
            'fat' => 4.49,
            'carb' => 0.61,
            'protein' => 2.69,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Putih telur 1 besar',
            'calorie' => 17,
            'fat' => 0.69,
            'carb' => 0.24,
            'protein' => 3.69,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Putih telur  100 gram(g)',
            'calorie' => 52,
            'fat' => 0.17,
            'carb' => 0.73,
            'protein' => 3.69,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Telur ceplok  1 Besar',
            'calorie' => 92,
            'fat' => 7.04,
            'carb' => 0.4,
            'protein' => 6.27,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Telur Goreng  1 Besar/1 Butir',
            'calorie' => 89,
            'fat' => 6.76,
            'carb' => 0.43,
            'protein' => 6.24,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Telur Goreng  1 Sedang',
            'calorie' => 78,
            'fat' => 5.88,
            'carb' => 0.37,
            'protein' => 5.42,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Telur Goreng  1 Kecil',
            'calorie' => 68,
            'fat' => 5.14,
            'carb' => 0.33,
            'protein' => 4.75,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Telur orak-arik  1 besar/ 1 telur',
            'calorie' => 101,
            'fat' => 7.45,
            'carb' => 1.34,
            'protein' => 6.76,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Telur dadar  1 besar/1 telur',
            'calorie' => 98,
            'fat' => 7.14,
            'carb' => 1.15,
            'protein' => 6.81,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Telur dadar  1 sedang',
            'calorie' => 88,
            'fat' => 6.45,
            'carb' => 1.04,
            'protein' => 6.15,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Sate Ayam 1 tusuk',
            'calorie' => 34,
            'fat' => 2.22,
            'carb' => 0.73,
            'protein' => 2.93,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Sate padang 1 tusuk',
            'calorie' => 24,
            'fat' => 0.99,
            'carb' => 1.02,
            'protein' => 2.7,
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($foods){
            DB::table('foodrecs')->insert($foods);
        });
    }
}
