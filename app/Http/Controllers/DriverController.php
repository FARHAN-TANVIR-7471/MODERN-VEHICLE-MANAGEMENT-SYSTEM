<?php

namespace App\Http\Controllers;

use App\Model\Driver;
use App\Services\UtilityService;
use Illuminate\Http\Request;
use DB;

class DriverController extends Controller
{
    
    public function index()
    {
        $driver = DB::table('drivers')->get();
        return view('admin.driver',['driver'=>$driver]);
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $fileOne = $request->file('nid_photo');
        $fileTwo = $request->file('driver_photo');

        $name =$request->input('name');
        $date_of_birth  =$request->input('date_of_birth');
        $mobile_number  =$request->input('mobile_number');
        $licence_number =$request->input('licence_number');
        $licence_experdate_date  =$request->input('licence_experdate_date');
        $nid  =$request->input('nid');
        
        $imageUploadPath = UtilityService::$imageUploadPath['profile_image'];
        $utilityService = new UtilityService;
        $nid_photo  = $utilityService->uplodeImage($fileOne, $imageUploadPath);
        $driver_photo  = $utilityService->uplodeImage($fileTwo, $imageUploadPath);

        $data = array('name'=>$name, 'date_of_birth'=>$date_of_birth,'mobile_number'=>$mobile_number, 'licence_number'=>$licence_number,'licence_experdate_date'=>$licence_experdate_date, 'nid'=>$nid,'nid_photo'=>$nid_photo, 'driver_photo'=>$driver_photo);

        DB::table('drivers')->insert($data);
        return redirect('/driver');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drivers = DB::table('drivers')->where('id', $id)->first();
        return view('admin.driver-edit',['drivers' => $drivers] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $transport = DB::table('drivers')->where('id', $request->id)->update([
            'name' => $request->input('name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'mobile_number' => $request->input('mobile_number'),
            'licence_number' => $request->input('licence_number'),
            'licence_number' => $request->input('licence_number'),
            'nid' => $request->input('nid'),

        ]);
        return redirect()->route('driver.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transport = DB::table('drivers')->where('id', $id)->delete();
        return redirect()->route('driver.index');
    }
}
