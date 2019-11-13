<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $reservations = Reservation::all();

        return view('reservations.index', compact('reservations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('reservations.create');
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
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $reservation = new Reservation([
            'driver_id' => $request->get('driver_id'),
            'parking_space_id' => $request->get('parking_space_id'),
            'duration_from' => $request->get('duration_from'),
            'duration_to' => $request->get('duration_to'),
            
        ]);
        $reservation->save();
        return redirect('/reservations')->with('success', 'Reservation saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $reservation = Reservation::find($id);
        return view('reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $reservation = Reservation::find($id);
        $reservation->first_name =  $request->get('first_name');
        $reservation->last_name = $request->get('last_name');
        $reservation->email = $request->get('email');
        $reservation->job_title = $request->get('job_title');
        $reservation->city = $request->get('city');
        $reservation->country = $request->get('country');
        $reservation->save();

        return redirect('/reservations')->with('success', 'Reservation updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect('/reservations')->with('success', 'Reservation deleted!');
    }
}
