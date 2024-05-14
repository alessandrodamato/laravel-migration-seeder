<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsFakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

      for ($i = 0; $i < 20; $i++) {
        $new_train = new Train();
        $new_train->company = $faker->company();
        $new_train->departure_station = $faker->city() . $faker->citySuffix();
        $new_train->arrival_station = $faker->city() . $faker->citySuffix();
        $new_train->departure_time = $faker->time();
        $new_train->arrival_time = $faker->time();
        $new_train->code = $faker->numberBetween(100000000000, 999999999999);
        $new_train->number_of_carriages = $faker->numberBetween(5, 15);
        $new_train->slug = $new_train->company . $new_train->code;
        $new_train->save();
      }

    }

}
