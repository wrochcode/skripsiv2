<?php

namespace Database\Seeders;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([[
            'name' => 'namecompany',
            'value' => 'SehatYokk',
            'keterangan' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'address',
            'value' => 'Tulus Harapan',
            'keterangan' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'telp',
            'value' => '0895326920220',
            'keterangan' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($about){
            // About::create($about);
            DB::table('abouts')->insert($about);
        });
    }
}
