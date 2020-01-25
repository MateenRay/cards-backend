<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Game::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            $us = $faker->randomDigitNotNull;
            $os = $faker->randomDigitNotNull;
            $won = $us > $os ? true : false;
            \App\Game::create([
                'username' => $faker->name,
                'users_score' => $us,
                'opp_score' => $os,
                'won' => $won,
            ]);
        }
    }
}
