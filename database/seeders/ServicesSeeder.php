<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Cambio de aceite',
                'description' => 'Cambio de aceite y filtro',
                'price' => 100,
            ],
            [
                'name' => 'Alineación',
                'description' => 'Alineación de las ruedas',
                'price' => 200,
            ],
            [
                'name' => 'Balanceo',
                'description' => 'Balanceo de las ruedas',
                'price' => 150,
            ],
            [
                'name' => 'Frenos',
                'description' => 'Cambio de pastillas de freno',
                'price' => 300,
            ],
            [
                'name' => 'Afinación',
                'description' => 'Afinación del motor',
                'price' => 500,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
