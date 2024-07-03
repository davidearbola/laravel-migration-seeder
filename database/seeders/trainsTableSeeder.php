<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $newRecord = new Train();
            $newRecord->company_name = $faker->company();
            $newRecord->departure_station = $faker->city();
            $newRecord->arrival_station = $faker->city();
            $newRecord->arrival_time = $faker->time();
            $newRecord->departure_time = $faker->time();
            $newRecord->train_code = $faker->ean13();
            $newRecord->number_of_carriages = $faker->numberBetween(1, 30);
            $newRecord->in_time = $faker->boolean();
            $newRecord->deleted = $faker->boolean();
            $newRecord->save();
        }
    }
}
