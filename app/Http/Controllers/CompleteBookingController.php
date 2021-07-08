<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CompleteBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        return view('frontend.ticket');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $trip = Trip::where('id', '=', $request->trip_id)->first();
        if ($request->class == 'Economy') {
            if ($request->no_adults + $request->no_children > $trip->economy_seats) {
                toastr()->warning('No enough seats.');
                return back()->withInput();
            }
        }else if($request->class == 'Business'){
            if ($request->no_adults + $request->no_children > $trip->business_seats) {
                toastr()->warning('No enough seats.');
                return back()->withInput();
            }
        }

        if ($request->class == 'Economy') {
            $trip->timestamps = false;
            $trip->update(['economy_seats' => $trip->economy_seats - ($request->no_adults + $request->no_children), 'trip_date' => DB::raw('trip_date')]);
        } else {
            $trip->timestamps = false;
            $trip->update(['business_seats' => $trip->business_seats - ($request->no_adults + $request->no_children), 'trip_date' => DB::raw('trip_date')]);
        }

        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'passport' => 'required',
            'email' => 'required|email',
            'mobile' => 'nullable|numeric',
            'no_adults' => 'nullable|numeric',
            'no_children' => 'nullable|numeric',
            'no_infants' => 'nullable|numeric',
            'class' => 'nullable',
        ]);

        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['passport'] = $request->passport;
        $data['mobile'] = $request->mobile;
        $data['no_adults'] = $request->no_adults;
        $data['no_children'] = $request->no_children;
        $data['no_infants'] = $request->no_infants;
        $data['class'] = $request->class;

        $data['status'] = 0;
        if ($request->class == 'Economy') {
            $data['total_price'] =
                ($request->no_adults * $trip->economy_price) +
                ($request->no_childeren * $trip->economy_price * 0.7) +
                ($request->no_infants * $trip->economy_price * 0.5);
        } else if ($request->class == 'Business') {
            $data['total_price'] = ($request->no_adults * $trip->business_price) + ($request->no_adults * $trip->business_price * 0.7) + ($request->no_adults * $trip->business_price * 0.5);
        }

        $data['reservation_code'] = Str::random(14);
        $data['trip_id'] = $trip->id;

        $reservation = Reservation::create($data);
        toastr()->success('Reservation Saved Successfully, Your reservation code is : '. $reservation->reservation_code);
        return redirect()->route('fronthome');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function show($reservation_code)
    {
        $ticket = Reservation::with(['trip'])->where('reservation_code','=',$reservation_code)->first();
        return view('frontend.ticket', compact('ticket'));
    }

    public function ticket($reservation_code)
    {
        $ticket = Reservation::with(['trip'])->where('reservation_code','=',$reservation_code)->first();
        if($ticket === null){
            toastr()->error('Your reservation code is wrong.');
            return redirect()->route('fronthome');
        } else {
            return view('frontend.ticket', compact('ticket'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
        $flight = Trip::where('id', '=', $id)->first();
        return view('frontend.complete', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
