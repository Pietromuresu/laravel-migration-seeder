<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10; $i++) {

            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->streetName();
            $newTrain->arrival_station = $faker->streetName();
            $newTrain->departure_hour = $faker->dateTimeThisMonth();
            $newTrain->arrival_hour = $faker->dateTimeInInterval($newTrain->departure_hour, '+1 day');
            $newTrain->train_number = $faker->randomNumber(6, true);
            $newTrain->carriages_number = $faker->randomNumber(2, false);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_deleted = $faker->boolean();
            $newTrain->save();
        }

    }
}
