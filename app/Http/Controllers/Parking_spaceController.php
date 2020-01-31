<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Parking_space;
use DB;

class Parking_spaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $parking_spaces = Parking_space::all();

        return view('crud.parking_spaces.index', compact('parking_spaces'));

    }
    public function detailsIndex()
    {
       $landDetails_id = Request::get ( 'landDetails_id' );
       $parking_spaces = DB::table('parking_spaces')->where('id',$landDetails_id)->get();

        return view('crud.parking_spaces.index', compact('parking_spaces'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('crud.parking_spaces.create');
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
            'name'=>'required',
            'address'=>'required',
            'description'=>'required'
        ]);

        $parking_space = new Parking_space([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'description' => $request->get('description'),
            
            //'open_on' => $request->get('open_on'),

             'poya' => $request->get('opentime1'),
             'public' => $request->get('opentime2'),
             'bank' => $request->get('opentime3'),
            // 'reservation_status' => $request->get('reservation_status'),
        ]);

        $parking_space->save();
        return redirect('/parking_spaces')->with('success', 'Parking_space saved!');
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
         $parking_space = Parking_space::find($id);
        return view('crud.parking_spaces.edit', compact('parking_space'));
    }
    public function editIndex()
    {
         $landEdit_id = Request::get ( 'landEdit_id' );
         $parking_space = Parking_space::find($landEdit_id);
        return view('crud.parking_spaces.edit', compact('parking_space'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'first_name'=>'required',
    //         'last_name'=>'required',
    //         'email'=>'required'
    //     ]);
    //
    //     $parking_space = Parking_space::find($id);
    //     $parking_space->first_name =  $request->get('first_name');
    //     $parking_space->last_name = $request->get('last_name');
    //     $parking_space->email = $request->get('email');
    //     $parking_space->job_title = $request->get('job_title');
    //     $parking_space->city = $request->get('city');
    //     $parking_space->country = $request->get('country');
    //     $parking_space->save();
    //
    //     return redirect('/parking_spaces')->with('success', 'Parking_space updated!');
    // }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'description'=>'required'
        ]);

        $parking_space = Parking_space::find($id);
        $parking_space->name =  $request->get('name');
        $parking_space->address = $request->get('address');
        $parking_space->description = $request->get('description');
        $parking_space->reservation_status = $request->get('reservation_status');
        $parking_space->open_on = $request->get('open_on');

        // $parking_space->city = $request->get('city');
        // $parking_space->country = $request->get('country');
        // $parking_space->save();

        return redirect('/parking_spaces')->with('success', 'Parking_space updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parking_space = Parking_space::find($id);
        $parking_space->delete();

        return redirect('/parking_spaces')->with('success', 'Parking_space deleted!');
    }
}
