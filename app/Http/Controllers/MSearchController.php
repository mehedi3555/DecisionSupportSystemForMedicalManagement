<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class MSearchController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:management');
    }


    public function weekly(Request $request){

    	$dis = $request->get('mwsearch');
     
    	return view('frontEnd.management.weeklysearch',['dis' => $dis]);
    }

    public function monthly(Request $request){

    	$dis = $request->get('mmsearch');
     
    	return view('frontEnd.management.monthlysearch',['dis' => $dis]);
    }
}
