<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
	public function __construct() {
		$this->middleware('age')->only('middlewareAgePage');
	}

    public function contactPage(){
    	return view('pages.contact');
}
	public function middlewareAgePage(Request $Request) {
		$age = $Request->age;

		return view('age', array('age'=>$age));
	}
}
