<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'name' => 'David Pavelka',
            'email' => 'pavelka1986@gmail.com',
            'password' => bcrypt('pavelka1986'),
            'remember_token' => str_random(10),
        ]);

        foreach(range(1,2) as $index)
        {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ]);
        }
    }
}
