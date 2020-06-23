<?php

namespace App\Http\Controllers;

use App\Model\Complane;
use Illuminate\Http\Request;
use DB;

class ComplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userpanel.complane');
    }

    public function adminindex()
    {
        $complanes = DB::table('complanes')->get();
        return view('admin.complanes',['complanes'=>$complanes]);
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
        $perpose =$request->input('perpose');
        $transport_name  =$request->input('transport_name');
        $complane_message  =$request->input('complane_message');

        $data = array('perpose'=>$perpose, 'transport_name'=>$transport_name,'complane_message'=>$complane_message);

        DB::table('complanes')->insert($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Complane  $complane
     * @return \Illuminate\Http\Response
     */
    public function show(Complane $complane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Complane  $complane
     * @return \Illuminate\Http\Response
     */
    public function edit(Complane $complane)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Complane  $complane
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complane $complane)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Complane  $complane
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complane $complane)
    {
        //
    }
}
