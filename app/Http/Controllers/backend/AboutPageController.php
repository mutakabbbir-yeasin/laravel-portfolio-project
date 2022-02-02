<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        return view('backend.about', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'designation' => 'required| string',
            'description' => 'required| string',
            'name' => 'required| string',
            'address' => 'required| string',
            'whatsapp' => 'required| string',
            'dob' => 'required| string',
            'email' => 'required| string',
            'skype' => 'required| string',
            'hours' => 'required| string',
            'projects' => 'required| string',
            'years' => 'required| string',
            'client' => 'required| string'
        ]);

        $about = About::first();
        $about->designation = $request->designation;
        $about->description = $request->description;
        $about->name = $request->name;
        $about->address = $request->address;
        $about->whatsapp = $request->whatsapp;
        $about->dob = $request->dob;
        $about->email = $request->email;
        $about->skype = $request->skype;
        $about->hours = $request->hours;
        $about->projects = $request->projects;
        $about->years = $request->years;
        $about->client = $request->client;

        if($request->file('my_img')){
            $img_file = $request->file('my_img');
            $img_file->storeAs('public/img/','my_img.' . $img_file->getClientOriginalExtension());
            $about->my_img = 'storage/img/my_img.' . $img_file->getClientOriginalExtension();
        }
        $about-> save();

        return redirect()->route('admin.about')->with('success', "Data have been updated successfully, Alhamdulillah");
    }
}

