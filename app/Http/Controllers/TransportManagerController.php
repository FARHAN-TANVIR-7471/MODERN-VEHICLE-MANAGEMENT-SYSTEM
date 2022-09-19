<?php

namespace App\Http\Controllers;

use App\Model\TransportManager;
use App\Services\UtilityService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        
        $imageUploadPath = UtilityService::$imageUploadPath['profile_image'];
        $utilityService = new UtilityService;
        $nid_photo  = $utilityService->uplodeImage($fileOne, $imageUploadPath);
        $manager_photo  = $utilityService->uplodeImage($fileTwo, $imageUploadPath);

        $data = array('name'=>$name, 'date_of_birth'=>$date_of_birth,'mobile_number'=>$mobile_number, 'nid'=>$nid,'nid_photo'=>$nid_photo, 'manager_photo'=>$manager_photo);

        DB::table('transport_managers')->insert($data);

        $user = new User;
        $newuser['user']= $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'usertype' => "transport_managers",
            'phone' => $request->mobile_number,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(40)
        ]);
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
