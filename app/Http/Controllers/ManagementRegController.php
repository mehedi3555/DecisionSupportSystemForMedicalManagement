<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Management;

class ManagementRegController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('frontEnd.pages.mreg');
    }

    public function storeManagement(Request $request){
    	
        $management = new Management();

        $management->name = $request->name;
        $management->email = $request->email;
        $management->password = bcrypt($request->password);

        $management->save();
    	
    	return redirect('/home');
    }
}
