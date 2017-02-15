<?php

use Illuminate\Database\Seeder;
use App\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Customer::truncate();

        $this->call(CustomerTableSeeder::class);
    }
}
