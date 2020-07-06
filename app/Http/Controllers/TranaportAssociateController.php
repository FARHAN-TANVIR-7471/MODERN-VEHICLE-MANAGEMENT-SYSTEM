<?php

namespace App\Http\Controllers;

use App\Model\TranaportAssociate;
use Illuminate\Http\Request;
use DB;

class TranaportAssociateController extends Controller
{
    
    public function index()
    {
        $tranaport_associates =DB::table('tranaport_associates')
                ->join('transports', 'tranaport_associates.fk_transport_id', '=', 'transports.id')
                ->join('drivers', 'drivers.id', '=', 'tranaport_associates.fk_driver_id')
                ->select('transports.id','transports.*','drivers.*')
                ->get();
        //dd($tranaport_associates);

        $transport = DB::table('transports')->get();
        $driver = DB::table('drivers')->get();
        $transportManager = DB::table('transport_managers')->get();

        return view('admin.tranaportAssociate',['tranaport_associates'=>$tranaport_associates,'transportManager'=>$transportManager, 'driver'=>$driver,'transport'=>$transport]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $fk_transport_id  =$request->input('transportid');
        $fk_driver_id =$request->input('driverid');
        $fk_managers_id =$request->input('managerid');

        $data = array('fk_transport_id'=>$fk_transport_id, 'fk_driver_id'=>$fk_driver_id,'fk_managers_id'=>$fk_managers_id);

        DB::table('tranaport_associates')->insert($data);
        return redirect('/transportAssociate');
    }

    
    public function show(TranaportAssociate $tranaportAssociate)
    {
        //
    }

    
    public function edit(TranaportAssociate $tranaportAssociate)
    {
        //
    }

    
    public function update(Request $request, TranaportAssociate $tranaportAssociate)
    {
        //
    }

    
    public function destroy(TranaportAssociate $tranaportAssociate)
    {
        //
    }
}
