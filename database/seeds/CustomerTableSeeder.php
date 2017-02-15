<?php

use Illuminate\Database\Seeder;


class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'name' => str_random(10),
            'description' => str_random(50),
            'user_id' => '1',
            'active' => 1,
        ]);
    }
}
