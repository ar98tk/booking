<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $airports = Airport::all();
        return view('backend.airports.index',compact('airports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        return view('backend.airports.create');
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
            'name'          => 'required',
            'country_name'  => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['name']             = $request->name;
        $data['country_name']     = $request->country_name;

        Airport::create($data);
        toastr()->success('Airport Created Successfully');
        return redirect()->route('airports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id)
    {
        $airport = Airport::findOrFail($id);
        $airport->delete();
        toastr()->success('Airport Deleted Successfully');
        return redirect()->route('airports.index');
    }
}
