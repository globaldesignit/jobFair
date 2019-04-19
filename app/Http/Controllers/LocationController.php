<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::all();
        return view('admin.location.index',['locations'=> $location]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $location = new Location;
        $location->fill($request->all());
        $location->shortName = $request->shortName;
        $location->save();
        return redirect()->back()->with('notify', 'Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::where('id', $id)->get();
        return view('admin.location.edit', ['location' => $location[0]]);
    }
    public function update($id, Request $request)
    {       
        $location = Location::where('id', $id)->first();
        $location->fill($request->all()); 
        if($request->status=="on")
        {
            $location->status =1;
        }  
        else{
            $location->status =0;
        }
        $location->save();
        return redirect()->back()->with('notify', 'Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Location $location)
    {
        $location = Location::findorfail($id);  
        $location->delete();
        return redirect()->back()->with('notify', 'Successfully');
    }
}
