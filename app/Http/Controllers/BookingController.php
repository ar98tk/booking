<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Trip;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $airports = Airport::all();
        return view('frontend.booking',compact('airports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        $from_airport = Airport::where('name',$request->from_airport_id)->get();
        $to_airport = Airport::where('name',$request->to_airport_id)->get();
        $results = Trip::with(['from_airport','from_airport'])
                        ->where('from_airport_id','=',$from_airport[0]->id)
                        ->where('to_airport_id','=',$to_airport[0]->id)
                        ->get();
        if($results->count() > 0){
            return view('frontend.results',compact('results'));
        }
        else {
            toastr()->success('No Flights Found, Please try different dates and try again');
            return redirect()->route('booking.index');
        }
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
