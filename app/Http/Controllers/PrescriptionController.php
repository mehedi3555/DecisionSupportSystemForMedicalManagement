<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Patient;

use DB;

class PrescriptionController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function register(){
    	$diseases = DB::table('diseases')->get();
        $patientId = DB::table('patients')
        ->select('id')
        ->orderBy('id','desc')
        ->limit(1)
        ->get();
    	return view('frontEnd.pages.prescriptionreg',['diseases' => $diseases, 'patientId' => $patientId]);
    }

    public function storePatient(Request $request){
    	$patient = new Patient();

        $patient->PId = $request->PId;
    	$patient->Name = $request->Name;
    	$patient->Age = $request->Age;
    	$patient->Gender = $request->Gender;
    	$patient->Pressure = $request->Pressure;
    	$patient->Symptom = $request->Symptom;
    	$patient->Diseases = $request->Diseases;
    	$patient->Doctor = $request->Doctor;
    	$patient->Medicine = $request->Medicine;
    	$patient->Date = $request->Date;
    	$patient->save();
    	return redirect('/patient-reg')->with('message','Save Successsully Done');
    }
}
