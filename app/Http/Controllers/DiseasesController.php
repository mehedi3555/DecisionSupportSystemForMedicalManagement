<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Diseases;

use DB;

class DiseasesController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }



    public function register(){
    	return view('frontEnd.pages.diseasesreg');
    }

    public function storeDiseases(Request $request){
    	$diseases = new Diseases();
        
    	$diseases->Name = $request->Name;
    	$diseases->save();
    	return redirect('/diseases-reg')->with('message','Save Successsully Done');
    }
}
