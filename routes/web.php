<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('booking', 'bookingController@booking')->name('booking');
Route::get('calender_sitebar', 'bookingController@calender_sitebar')->name('calender_sitebar');
Route::get('gettimeslot', 'bookingController@getTimeSlot')->name('gettimeslot');
Route::get('booking_list', 'bookingController@get_booking_list')->name('booking_list');
