<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landowner;


class LandownerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $landowners = Landowner::all();

        return view('crud.landowners.index', compact('landowners'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('crud.landowners.create');
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

        $landowner = new Landowner([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'gender' => $request->get('gender'),
            'contact_no' => $request->get('contact_no'),
            'nic' => $request->get('nic'), 
             'image' => $request->get('image'),
             'username' => $request->get('username'), 
             'password' => $request->get('password'), ]);
        $landowner->save();
        return redirect('/landowners')->with('success', 'Landowner saved!');
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
         $landowner = Landowner::find($id);
        return view('crud.landowners.edit', compact('landowner'));
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

        $landowner = Landowner::find($id);
        $landowner->first_name =  $request->get('first_name');
        $landowner->last_name = $request->get('last_name');
        $landowner->email = $request->get('email');
        $landowner->job_title = $request->get('job_title');
        $landowner->city = $request->get('city');
        $landowner->country = $request->get('country');
        $landowner->save();

        return redirect('/landowners')->with('success', 'Landowner updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $landowner = Landowner::find($id);
        $landowner->delete();

        return redirect('/landowners')->with('success', 'Landowner deleted!');
    }
}
