<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function lendingPage()
    {
        echo "home";
    }

    public function adminIndex()
    {
        $transportschedules = DB::table('transportschedules')->get();
        return view('admin.index', ['transportschedules'=>$transportschedules]);
    }

    public function userIndex()
    {
        echo "Helloo";
        // $transportschedules = DB::table('transportschedules')->get();
        // return view('admin.index', ['transportschedules'=>$transportschedules]);
    }
}
