<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train;
        $train->company = "EuroSpeed";
        $train->from = "Berlin";
        $train->to = "Turin";
        $train->departure_time = "2023-04-12 05:12:32";
        $train->arrival_time = "2023-04-12 12:20:33";
        $train->code = 2453;
        $train->cars = 9;
        $train->on_time = "yes";
        $train->canceled = "no";

        $train->save();

        $train = new Train;
        $train->company = "Bavaria Transfers";
        $train->from = "Vienna";
        $train->to = "Lion";
        $train->departure_time = "2023-05-23 16:32:32";
        $train->arrival_time = "2023-05-23 19:43:12";
        $train->code = 9865;
        $train->cars = 7;
        $train->on_time = "no";
        $train->canceled = "no";

        $train->save();

        $train = new Train;
        $train->company = "Slow travels";
        $train->from = "London";
        $train->to = "Barcelona";
        $train->departure_time = "2023-06-22 03:34:12";
        $train->arrival_time = "2023-06-22 11:45:12";
        $train->code = 7382;
        $train->cars = 11;
        $train->on_time = "yes";
        $train->canceled = "yes";

        $train->save();
    }
}
