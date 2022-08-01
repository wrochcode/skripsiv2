<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([[
            'name' => 'Mei',
            'value' => 'Pelajar only 5k',
            'describe' => 'event Mei',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Juni',
            'value' => 'Get member, one day free',
            'describe' => 'Event Juni',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Juli',
            'value' => 'Get member, one day free and Makan with member 10 juli',
            'describe' => 'Event Juli',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ])->each(function($data){
            DB::table('events')->insert($data);
        });
    }
}
