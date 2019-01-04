<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class ManagementController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:management');
    }
    
    public function mweekly(){
     
        $diseases = DB::table('diseases')->get();
    	return view('frontEnd.management.mweekly',['diseases' => $diseases]);
    }

    public function mmonthly(){
        $diseases = DB::table('diseases')->get();
    	return view('frontEnd.management.mmonthly',['diseases' => $diseases]);
    }

    public function myearly(){
    	return view('frontEnd.management.myearly');
    }
}
