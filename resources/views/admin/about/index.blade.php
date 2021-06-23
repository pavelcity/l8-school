@extends('layouts.admin')
@section('title', 'Админка about')


@section('content')


	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">about</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item">
						<a href="{{ route('dashboard.home') }}">
							<i class='bx bx-home-alt text-info'></i>
						</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">about</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->








<div class="card radius-5">
	<div class="card-body">
	
		<div class="card-title">
			
			@php
				$res = count($abouts)
			@endphp

			@if($res != 1)
			<a href="{{ route('dashboard.about.create') }}" class="btn btn-info m-1 px-5 py-2">
				<i class="bx bx-plus"></i>
			</a>
			@endif

			
		</div>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Название</th>
						<th style="width: 200px;">btns</th>
					</tr>
				</thead>
			


				@php
					$i = 1;
				@endphp

				<tbody>

					@if(true)
					@forelse($abouts as $item)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $item->title ?? 'нет данных' }}</td>

						

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('dashboard.about.edit', $item->id) }}" class="btn btn-twitter btn-sm">Редактировать</a>
								<a href="{{ route('dashboard.about.delete', $item->id) }}" onclick="return confirm('удалить?')" class="btn btn-danger btn-sm">Удалить</a>
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