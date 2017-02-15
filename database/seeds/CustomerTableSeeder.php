<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerTableSeeder extends Seeder
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
            DB::table('customer')->insert([
                'name'        => $faker->company(),
                'description' => $faker->paragraph(6),
                'address' => $faker->address(),
                'user_id'     => $faker->randomElement(array(1,2,3)),
                'active'      => $faker->boolean(),
            ]);
        }
    }
}
