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





	#create
	public function create () {
		$teachers = Teacher::get();
		return view ('lkteacher.teachersheduler.create', compact('teachers'));
	}



 
	#store
	public function store (Request $request) {
		$this->validate($request, [
			'teacher_id' => 'required',
			'title' => 'required',
			'day' => 'required',
			'time' => 'required',
			'status' => 'required',
			'descr' => 'required',
		], [
			'teacher_id.required' => 'Выберите преподавателя',
			'title.required' => 'обзательное поле',
			'day.required' => 'укажите дату',
			'time.required' => 'уточните время',
			'status.required' => 'выберите статут консультации',
			'descr.required' => 'напишите хотябы пару слов',
		]);

		$sheduler = new Sheduler;

		$sheduler->title = $request->title;
		$sheduler->day = $request->day;
		$sheduler->time = $request->time;
		$sheduler->status = $request->status;
		$sheduler->descr = $request->descr;
		$sheduler->teacher_id = $request->teacher_id;


		$sheduler->save();

		return redirect()->route('dashteacher.teachersheduler.home');
	}
 




	#edit
	public function edit ($id) {
		$teachers = Teacher::get();
		$sheduler = Sheduler::find($id);
		return view ('lkteacher.teachersheduler.edit', compact('sheduler', 'teachers'));
	}






	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required',
		], [
			'title.required' => 'обзательное поле',
		]);

		$sheduler = Sheduler::find($id);


		$sheduler->update([
			'title' => $request->title,
			'day' => $request->day,
			'time' => $request->time,
			'status' => $request->status,
			'descr' => $request->descr,
			'teacher_id' => $request->teacher_id,
		]);
		

		return redirect()->route('dashteacher.teachersheduler.home');
	}
 





	#delete
	public function delete ($id) {
		$sheduler = Sheduler::find($id);
		$sheduler->delete();

		return redirect()->route('dashteacher.teachersheduler.home');
	}



}
