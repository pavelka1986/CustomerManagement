<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomeruserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,30) as $index)
        {
            DB::table('customeruser')->insert([
                'user_id'     => $faker->randomElement(array(1,2,3)),
                'customer_id'      => $faker->numberBetween($min = 1, $max = 30)
            ]);
        }
    }
}
