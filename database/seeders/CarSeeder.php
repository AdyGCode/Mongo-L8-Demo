<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                "manufacturer" => "Tesla",
                "model" => "Model S (Plaid)",
                "price" => 186990
            ],
            [
                "manufacturer" => "Tesla",
                "model" => "Model 3",
                "price" => 59900
            ],
            [
                "manufacturer" => "Tesla",
                "model" => "Cybertruck"
            ],
            [
                "manufacturer" => "Tesla",
                "model" => "Model Y",
                "price" => 147990
            ],
            [
                "manufacturer" => "Tesla",
                "model" => "Model 3 Long Range",
                "price" => 73400
            ],
            [
                "manufacturer" => "Tesla",
                "model" => "Model 3 Performance",
                "price" => 84900
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }

    }
}
