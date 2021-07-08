<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', function () {
    return view('frontend.home');
})->name('fronthome');
/*
Route::get('/booking', function () {
    return view('frontend.booking');
})->name('frontbooking');*/
Route::resource('booking','App\Http\Controllers\BookingController')->except('show');
Route::resource('complete','App\Http\Controllers\CompleteBookingController')->except('show');

Route::post('searchTrip','App\Http\Controllers\BookingController@trip')->name('search');
Route::get('results','App\Http\Controllers\BookingController@result')->name('results');
Route::get('ticket/{reservation_code}','App\Http\Controllers\CompleteBookingController@ticket')->name('ticket');
Route::get('search','App\Http\Controllers\ReservationController@search')->name('search');

Route::group(['prefix'=> 'admin','middleware'=>'auth'],function (){

    Route::get('/', function () {
        return view('backend.home');
    });

    Route::resource('contacts','App\Http\Controllers\ContactController')->except('edit','update','create');
    Route::resource('airports','App\Http\Controllers\AirportController')->except('edit','update','show');
    Route::resource('trips','App\Http\Controllers\TripController')->except('show');
    Route::resource('reservation','App\Http\Controllers\ReservationController')->except('show');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
