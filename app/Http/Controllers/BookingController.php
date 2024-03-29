<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Admin - Booking request List
     */
    public function index()
    {
        $bookings = Booking::get();
        return view('admin.booking-list',['bookings' => $bookings]);
    }

    /**
     * Admin - Booking request List
     */
    public function approve($id)
    {
        $bookings = Booking::where('id', $id)->first();
        $bookings->status = "Approved";
        $bookings->save();
        return back();
    }

    /**
     * User booking request
     */
    public function userBooking(){
        return view('userpanel.booking-form');
    }
    /**
     * User booking request
     */
    public function userBookingRequest(Request $request){
        $request['user_id'] = auth()->user()->id;
        Booking::create($request->all());
        return back()->with('success', 'Your booking create successfully');
    }
}
