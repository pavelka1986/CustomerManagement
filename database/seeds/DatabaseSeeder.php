<?php

use Illuminate\Database\Seeder;
use App\Customer;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
        $this->call(UserTableSeeder::class);

        //Customer::truncate();
        $this->call(CustomerTableSeeder::class);

        //Customer::truncate();
        $this->call(CustomeruserTableSeeder::class);
    }
}
