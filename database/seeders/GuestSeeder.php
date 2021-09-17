<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guest_types')->insert([
            'id' => 1,
           'g_type' => 'Company' 
        ]);
        
        DB::table('guest_types')->insert(['id' => 1,
            'id' => 2,
           'g_type' => 'Walk-In' 
        ]);
    }
}