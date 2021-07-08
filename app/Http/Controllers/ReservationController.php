<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('backend.reservations.index',compact('reservations'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function search(Request $request){
        return redirect('ticket/'.$request->reservation_code);
    }
}
