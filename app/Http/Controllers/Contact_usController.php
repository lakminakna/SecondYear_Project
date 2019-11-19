<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact_us;


class Contact_usController extends Controller
{
    
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
            'email'=>'required',
            'description'=>'required',

        ]);

        $contact_us = new Contact_us([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'phone_no' => $request->get('phone_no'),
            'email' => $request->get('email'),
            'description' => $request->get('description'),
           
        ]);
        $contact_us->save();
        return redirect('home/index')->with('success', 'Message sent!');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact_us = Contact_us::find($id);
        $contact_us->delete();

        return redirect('/')->with('success', 'Message deleted!');
    }
}
