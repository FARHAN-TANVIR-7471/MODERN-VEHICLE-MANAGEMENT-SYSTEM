<?php

namespace App\Http\Controllers;

use App\Model\TransportManager;
use Illuminate\Http\Request;
use DB;

class TransportManagerController extends Controller
{

    public function index()
    {
        $transportManager = DB::table('transport_managers')->get();
        return view('admin.transportmanager',['transportManager'=>$transportManager]);
    }

    public function create()
    {
        //
    }

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
        return redirect('/transportManager');
    }

    public function show(TransportManager $transportManager)
    {
        //
    }

    public function edit(TransportManager $transportManager)
    {
        //
    }

    public function update(Request $request, TransportManager $transportManager)
    {
        //
    }

    public function destroy(TransportManager $transportManager)
    {
        //
    }
}
