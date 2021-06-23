<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
	#index
	public function index () {
		$contacts = Contact::get();
		return view ('admin.contact.index', compact('contacts'));
	}





	#create
	public function create () {
		return view ('admin.contact.create');
	}







	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		$contact = new Contact;

		$contact->title = $request->title;
		$contact->adres = $request->adres;
		$contact->phone = $request->phone;
		$contact->email = $request->email;
		$contact->map = $request->map;

		$contact->save();

		return redirect()->route('dashboard.contact.home');

	}



	#edit
	public function edit ($id) {
		$contact = Contact::find($id);
		return view ('admin.contact.edit', compact('contact'));
	}




	
	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		
		


		$contact = Contact::find($id);






		$contact->update([
				'title' => $request->title,
				'adres' => $request->adres,
				'phone' => $request->phone,
				'email' => $request->email,
				'map' => $request->map,
			]);

		return redirect()->route('dashboard.contact.home');
	}
















	#delete
	public function delete($id) {
		$contact = Contact::find($id);

		$contact->delete();
		return redirect()->route('dashboard.contact.home');
	}











}
