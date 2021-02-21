<?php

namespace App\Http\Controllers;

use App\Drivervehicle;
use Illuminate\Http\Request;

class DrivervehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Drivervehicle::all();
        return view('driver.dashboard',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver.vehicleCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'model' => 'required',
            'number' => 'required',
        ]);

        Drivervehicle::create($request->all());

        return redirect()->route('driver.dashboard')->with('success','Vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drivervehicle  $drivervehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Drivervehicle $drivervehicle)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drivervehicle  $drivervehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Drivervehicle $drivervehicle)
    {
        return view('driver.vehicleEdit',compact('drivervehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drivervehicle  $drivervehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drivervehicle $drivervehicle)
    {
        $request->validate([
            'type' => 'required',
            'model' => 'required',
            'number' => 'required',
        ]);
        $product->update($request->all());

        return redirect()->route('driver.dashboard')->with('success','Vehicle updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drivervehicle  $drivervehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drivervehicle $drivervehicle)
    {
        $drivervehicle->delete();
  
        return redirect()->route('driver.dashboard')
                        ->with('success','Vehicle removed successfully');
    }
}
