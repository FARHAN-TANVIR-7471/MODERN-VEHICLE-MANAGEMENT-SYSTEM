<?php

namespace App\Http\Controllers;

use App\Model\transport;
use App\Transportschedule;
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
    public function show(Transportschedule $transportschedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transportschedule  $transportschedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transportschedules = DB::table('transportschedules')->where('id', $id)->first();
        $transport = DB::table('transports')->get();
        return view('admin.tranaport-schedule-edit',['transport'=>$transport,'transportschedules' => $transportschedules] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\transportschedule  $transportschedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transportschedule $transportschedule)
    {
        $transport = DB::table('transportschedules')->where('id', $request->id)->update([
            'schedules_name' => $request->input('schedules_name'),
            'transport_id' => $request->input('transport_id'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),

        ]);
        return redirect()->route('transport.schodule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transportschedule  $transportschedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transport = DB::table('transportschedules')->where('id', $id)->delete();
        return redirect()->route('transport.schodule');
    }

    public function schoduleList()
    {
        $transportschedules = Transportschedule::with('transport')->get();
        return view('schodule-list', ["transportschedules" => $transportschedules]);
    }

    public function transportList(){
        $transports = transport::get();
        // dd($transports->toArray());
        return view('transport-list', ["transports" => $transports]);
    }
}
