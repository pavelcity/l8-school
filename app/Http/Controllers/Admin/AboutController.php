<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    
	#index
	public function index () {
		$abouts = About::get();
		return view ('admin.about.index', compact('abouts'));
	}



	#create
	public function create () {
		return view ('admin.about.create');
	}





	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		$about = new About;

		$about->title = $request->title;
		$about->descr = $request->descr;

		$about->save();

		return redirect()->route('dashboard.about.home');

	}







	#edit
	public function edit ($id) {
		$about = About::find($id);
		return view ('admin.about.edit', compact('about'));
	}







	
	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		$about = About::find($id);

		$about->update([
				'title' => $request->title,
				'descr' => $request->descr,
			]);

		return redirect()->route('dashboard.about.home');
	}
















	#delete
	public function delete($id) {
		$about = About::find($id);

		$about->delete();
		return redirect()->route('dashboard.about.home');
	}









	#
}
