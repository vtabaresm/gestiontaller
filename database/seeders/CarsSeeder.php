<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsSeeder extends Seeder
{

    public function run(): void
    {
        $cars = [
            [
                'license_plate' => 'CNZ-123',
                'brand' => 'Corolla',
                'model' => '2019',
                'color' => 'Negro',
            ],
            [
                'license_plate' => 'GMC-123',
                'brand' => 'Renault',
                'model' => '2018',
                'color' => 'Blanco',
            ],
            [
                'license_plate' => 'KIA-123',
                'brand' => 'Toyota',
                'model' => '2017',
                'color' => 'Rojo',
            ],
            [
                'license_plate' => 'LW-123',
                'brand' => 'Chevrolet',
                'model' => '2016',
                'color' => 'Azul',
            ],
            [
                'license_plate' => 'HJ-123',
                'brand' => 'Chevrolet',
                'model' => '2015',
                'color' => 'verde',
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
