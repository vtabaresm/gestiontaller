<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Car;
use App\Models\Service;

class AppointmentController extends Controller
{

    public function index()
    {
        $appointments = Appointment::all();
        $cars = Car::all();
        $services = Service::all();
        return view('appointments.index', compact('appointments', 'cars', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->car_id = $request->car_id;
        $appointment->service_id = $request->service_id;
        $appointment->appointment_at = $request->appointment_at;
        $appointment->save();
        return redirect()->route('appointments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
 
        $appointment->car_id = $request->car_id;
        $appointment->service_id = $request->service_id;
        $appointment->appointment_at = $request->appointment_at;

        return redirect()->route('appointments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
