<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PatientController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function info(){

    	$patients = DB::table('patients')
            ->join('diseases', 'patients.Diseases', '=', 'diseases.id')
            ->select('patients.*', 'Diseases.Name as dName')
            ->orderBy('patients.id')
            ->get();

    	return view('frontEnd.pages.patient',['patients' => $patients]);
    }
}
