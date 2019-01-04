<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ManagementLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:management');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontEnd.management.managementhome');
    }
}
