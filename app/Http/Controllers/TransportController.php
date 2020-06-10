<?php

namespace App\Http\Controllers;

use App\Model\transport;
use Illuminate\Http\Request;
use DB;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transport = transport::all();
        return view('admin.transport');
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

        $name =$request->input('name');
        $type  =$request->input('type');
        $mpdel  =$request->input('mpdel');
        $coler =$request->input('coler');
        $licence_number  =$request->input('licence_number');
        $licence_experdate  =$request->input('licence_experdate');
        //dd($licence_experdate);
        $data = array('name'=>$name, 'type'=>$type,'mpdel'=>$mpdel, 'coler'=>$coler,'licence_number'=>$licence_number, 'licence_experdate'=>$licence_experdate);
        //dd($data);

        DB::table('transports')->insert($data);
        return redirect('/transport');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function show(transport $transport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function edit(transport $transport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transport $transport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function destroy(transport $transport)
    {
        //
    }
}
