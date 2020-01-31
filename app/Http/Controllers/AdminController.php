<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $admins = Admin::all();

        return view('crud.admins.index', compact('admins'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('crud.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([               //araval Form Validation
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>['required','min:8']
        ]);

        $admin = new Admin([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            
            'contact_no' => $request->get('contact_no'),
            'email' => $request->get('email'),
            
            'username' => $request->get('username'),
            'password' => $request->get('password'),

        ]);
        $admin->save();
        return redirect('/admins')->with('success', 'New Admin saved!');
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
         $admin = Admin::find($id);
        return view('crud.admins.edit', compact('admin'));
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

        $admin = Admin::find($id);
        $admin->first_name =  $request->get('first_name');
        $admin->last_name = $request->get('last_name');
       
       
        $admin->contact_no = $request->get('contact_no');
         $admin->email = $request->get('email');
   
        // $admin->image = $request->get('image');
        $admin->username = $request->get('username');
        $admin->password = $request->get('password');



        $admin->save();

        return redirect('/admins')->with('success', 'Administrator updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        return redirect('/admins')->with('success', 'Administrator deleted!');
    }
}
