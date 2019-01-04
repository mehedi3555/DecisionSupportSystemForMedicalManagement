<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class GraphController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function weekly(){
        $diseases = DB::table('diseases')->get();
    	return view('frontEnd.pages.weekly',['diseases' => $diseases]);
    }

    public function monthly(){
        $diseases = DB::table('diseases')->get();
    	return view('frontEnd.pages.monthly',['diseases' => $diseases]);
    }

    public function yearly(){
    	return view('frontEnd.pages.yearly');
    }
}
