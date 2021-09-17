<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_types')->insert([
            'id'=> 1,
            'p_type' => 'Cash'
        ]);

        DB::table('payment_types')->insert([
            'id' => 2,
            'p_type' => 'Credit'
        ]);
    }
}