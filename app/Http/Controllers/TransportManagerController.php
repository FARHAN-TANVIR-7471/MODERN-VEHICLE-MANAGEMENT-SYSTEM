<?php

namespace App\Http\Controllers;

use App\Model\TransportManager;
use Illuminate\Http\Request;
use DB;

class TransportManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $transportManager = TransportManager::all();
        return view('admin.transportmanager');
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
        $fileOne = $request->file('nid_photo');
        $fileTwo = $request->file('manager_photo');

        $name =$request->input('name');
        $date_of_birth  =$request->input('date_of_birth');
        $mobile_number  =$request->input('mobile_number');
        $nid  =$request->input('nid');
        $nid_photo  ='/images/'.$fileOne->getClientOriginalName();
        $manager_photo  ='/images/'.$fileTwo->getClientOriginalName();

        $destinationPath = 'image/';
        $fileOne->move($destinationPath,$fileOne->getClientOriginalName());
        $fileTwo->move($destinationPath,$fileTwo->getClientOriginalName());

        $data = array('name'=>$name, 'date_of_birth'=>$date_of_birth,'mobile_number'=>$mobile_number, 'nid'=>$nid,'nid_photo'=>$nid_photo, 'manager_photo'=>$manager_photo);
        //dd($data);

        DB::table('transport_managers')->insert($data);
        return redirect('/driver');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\TransportManager  $transportManager
     * @return \Illuminate\Http\Response
     */
    public function show(TransportManager $transportManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TransportManager  $transportManager
     * @return \Illuminate\Http\Response
     */
    public function edit(TransportManager $transportManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TransportManager  $transportManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransportManager $transportManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TransportManager  $transportManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransportManager $transportManager)
    {
        //
    }
}
