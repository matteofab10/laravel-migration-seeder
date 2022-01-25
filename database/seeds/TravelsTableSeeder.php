<?php

use App\Travel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++) {
            $newTravel = new Travel();
            $newTravel->name = $faker->text(30);
            $newTravel->duration = $faker->randomNumber(2);
            $newTravel->price = $faker->randomFloat(2, 1, 999);
            $newTravel->type = $faker->text(30);
            $newTravel->available_until = $faker->date();
            $newTravel->save();
        }
    }
}