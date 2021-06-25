<?php

namespace App\Http\Controllers\Lkstudent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LkstudentController extends Controller
{
    
	#index 
	public function index () {
		return view ('lkstudent.index');
	}
}
