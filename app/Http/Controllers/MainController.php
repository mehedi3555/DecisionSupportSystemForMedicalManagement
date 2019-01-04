<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
    	return view('frontEnd.pages.login');
    }

    public function management(){
    	return view('frontEnd.pages.mlogin');
    }
}
