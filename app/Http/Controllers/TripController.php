<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $trips = Trip::with(['from_airport','to_airport'])->get();
        return view('backend.trips.index',compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        $airports = Airport::all();
        return view('backend.trips.create',compact('airports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'economy_seats'   => 'required|numeric',
            'economy_price'   => 'required|numeric',
            'business_seats'  => 'required|numeric',
            'business_price'  => 'required|numeric',
            'trip_date'       => 'required',
            'from_airport_id' => 'required|numeric',
            'to_airport_id'   => 'required|numeric',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Trip::create($request->all());
        toastr()->success('Trip Created Successfully');
        return redirect()->route('trips.index');
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
        //
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
        //
    }
}
