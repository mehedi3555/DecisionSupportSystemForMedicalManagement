<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class SearchController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function weekly(Request $request){

    	$dis = $request->get('wsearch');
     
    	return view('frontEnd.pages.weeklySearch',['dis' => $dis]);
    }

    public function monthly(Request $request){

    	$dis = $request->get('msearch');
     
    	return view('frontEnd.pages.monthlySearch',['dis' => $dis]);
    }
}
