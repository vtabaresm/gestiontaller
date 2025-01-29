<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;

class Appointments extends Seeder
{
    public function run(): void
    {
        $appointments = [
            [
                'car_id' => 1,
                'service_id' => 1,
                'status' => 'Pendiente',
                'appointment_at' => '2021-10-01 10:00:00',
            ],
            [
                'car_id' => 2,
                'service_id' => 2,
                'appointment_at' => '2021-10-02 11:00:00',
            ],
            [
                'car_id' => 3,
                'service_id' => 3,
                'appointment_at' => '2021-10-03 12:00:00',
            ],
            [
                'car_id' => 4,
                'service_id' => 4,
                'appointment_at' => '2021-10-04 13:00:00',
            ],
            [
                'car_id' => 5,
                'service_id' => 5,
                'appointment_at' => '2021-10-05 14:00:00',
            ],
        ];

        foreach ($appointments as $appointment) {
            Appointment::create($appointment);
        }
    }
}
