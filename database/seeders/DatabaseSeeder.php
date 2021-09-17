<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Return_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GuestSeeder::class,);
        $this->call(PaymentSeeder::class);
        $this->call(HotelSeeder::class);
    }
}