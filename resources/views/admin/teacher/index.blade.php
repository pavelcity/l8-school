
@extends('layouts.admin')
@section('title', 'Админка Учителя')


@section('content')


	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Учителя</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item">
						<a href="{{ route('dashboard.home') }}">
							<i class='bx bx-home-alt text-info'></i>
						</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Учителя</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->








<div class="card radius-5">
	<div class="card-body">
	
		<div class="card-title">
			
			
			<a href="{{ route('dashboard.teacher.create') }}" class="btn btn-info m-1 px-5 py-2">
				<i class="bx bx-plus"></i>
			</a>

			
		</div>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Имя</th>
						<th scope="col">Предмет</th>
						<th scope="col">Email</th>
						<th scope="col">phone</th>
						<th style="width: 200px;">btns</th>
					</tr>
				</thead>
			


				@php
					$i = 1;
				@endphp

				<tbody>

					@if(true)
					@forelse($teachers as $item)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $item->name ?? 'нет данных' }}</td>
						<td>{{ $item->tema ?? 'нет данных' }}</td>
						<td>{{ $item->email ?? 'нет данных' }}</td>
						<td>{{ $item->phone ?? 'нет данных' }}</td>

						

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('dashboard.teacher.edit', $item->id) }}" class="btn btn-twitter btn-sm">Редактировать</a>
								<a href="{{ route('dashboard.teacher.delete', $item->id) }}" onclick="return confirm('удалить?')" class="btn btn-danger btn-sm">Удалить</a>
							</div>
						</td>

					</tr>
					@empty
						<p>Данных нет</p>
					@endforelse
					@endif
				



				</tbody>

			</table>
		</div>
	</div>
</div>




@endsection