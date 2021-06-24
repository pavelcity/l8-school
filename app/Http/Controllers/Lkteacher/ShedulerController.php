<?php

namespace App\Http\Controllers\Lkteacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sheduler;
use App\Models\Teacher;

class ShedulerController extends Controller
{
    
	#index
	public function index () {
		$shedulers = Sheduler::latest()->get();
		return view ('lkteacher.teachersheduler.index', compact('shedulers'));
	}
}
