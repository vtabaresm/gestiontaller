<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\Car;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
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
        $service = Service::find($id);
        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

    public function dashboard()
    {
        $services = 
        $servicesCount = 
        $serviceLowPrice = $services->min('price');
        $serviceLowPrice = $services->where('price', $serviceLowPrice)->first();
        $redCarsCount = Car::where('color', 'Rojo')->count();
        $serviceMostUsed = Appointment::select('service_id')
            ->groupBy('service_id')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        $serviceMostUsed = Service::find($serviceMostUsed->service_id);
        return view('services.dashboard', compact('servicesCount', 'serviceLowPrice', 'redCarsCount', 'serviceMostUsed'));
    }
}
