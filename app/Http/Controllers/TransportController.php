<?php

namespace App\Http\Controllers;

use App\Model\transport;
use Illuminate\Http\Request;
use DB;

class TransportController extends Controller
{
    
    public function index()
    {
        $transport = DB::table('transports')->get();
        return view('admin.transport',['transport'=>$transport]);
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $name =$request->input('name');
        $type  =$request->input('type');
        $mpdel  =$request->input('mpdel');
        $coler =$request->input('coler');
        $licence_number  =$request->input('licence_number');
        $licence_experdate  =$request->input('licence_experdate');
 
        $data = array('name'=>$name, 'type'=>$type,'mpdel'=>$mpdel, 'coler'=>$coler,'licence_number'=>$licence_number, 'licence_experdate'=>$licence_experdate);

        DB::table('transports')->insert($data);
        return redirect('/transport');
    }

    public function show(transport $transport)
    {
        //
    }

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

    public function destroy(transport $transport)
    {
        //
    }
}
