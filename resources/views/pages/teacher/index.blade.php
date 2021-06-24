

@extends('layouts.site')
@section('title', 'учителя')

 

@section('content')



<div class="container mx-auto mt-6 px-5">
	<h1 class="text-4xl font-semibold text-indigo-500 mb-10">Учителя</h1>



	<hr>


	<table class="table-auto w-full">
		<thead>
			<tr class="text-left">
				<th>Имя</th>
				<th class="invisible sm:visible">Предмет</th>
				<th class="invisible sm:visible">Почта</th>
				<th class="invisible sm:visible">Телефон</th>
			</tr>
		</thead>
		<tbody>

			@forelse($teachers as $teacher)
			<tr class="border-b border-indigo-500">
				<td><a href="{{ route('teachers.detail', $teacher->slug) }}" class="sm:w-full text-indigo-500 hover:text-gray-800 transition">{{ $teacher->name }}</a></td>
				<td class="invisible sm:visible ">{{ $teacher->tema }}</td>
				<td class="invisible sm:visible">{{ $teacher->email }}</td>
				<td class="invisible sm:visible">{{ $teacher->phone }}</td>
			</tr>
			@empty
			<p>нет данных</p>
		@endforelse


		</tbody>
	</table>


	

</div>

@endsection