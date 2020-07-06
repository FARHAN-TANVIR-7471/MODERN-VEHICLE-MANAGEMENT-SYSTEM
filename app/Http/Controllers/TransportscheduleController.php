<?php

namespace App\Http\Controllers;

use App\transportschedule;
use Illuminate\Http\Request;
use DB;

class TransportscheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transport = DB::table('transports')->get();
        $transportschedules = DB::table('transportschedules')->get();
        return view('admin.tranaportSchedule',['transport'=>$transport, 'transportschedules'=>$transportschedules]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedules_name  =$request->input('schedules_name');
        $transport_id =$request->input('transport_id');
        $start_time =$request->input('start_time');
        $end_time =$request->input('end_time');

        $data = array('schedules_name'=>$schedules_name, 'transport_id'=>$transport_id,'start_time'=>$start_time, 'end_time'=>$end_time);

        DB::table('transportschedules')->insert($data);
        return redirect('/transportSchodule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transportschedule  $transportschedule
     * @return \Illuminate\Http\Response
     */
    public function show(transportschedule $transportschedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transportschedule  $transportschedule
     * @return \Illuminate\Http\Response
     */
    public function edit(transportschedule $transportschedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transportschedule  $transportschedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transportschedule $transportschedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transportschedule  $transportschedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(transportschedule $transportschedule)
    {
        //
    }
}
