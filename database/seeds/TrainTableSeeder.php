<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {

            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure = $faker->dateTimeBetween('-1 week, +1 week');
            $train->arrival = $faker->dateTimeBetween('-1 week, +1 week');
            $train->code = $faker->bothify('??-######');
            $train->carriages_number = $faker->numberBetween(3,30);
            $train->in_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            $train->save();
        }
    }
}
