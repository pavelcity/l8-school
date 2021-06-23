@extends('layouts.admin')
@section('title', 'Админка')


@section('content')


   	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Главная</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item">
						<a href="{{ route('dashboard.home') }}">
							<i class='bx bx-home-alt text-info'></i>
						</a>
					</li>
					{{-- <li class="breadcrumb-item active" aria-current="page">Настройки</li> --}}
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->





<div class="row">




	
	<div class="col-12 col-lg-4">
		<a href="#" class="card radius-5 bg-primary">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-white">создать, изменить</p>
						<h3 class="mb-0 text-white">Профиль</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 












 

	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.about.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-info">настроить</p>
						<h3 class="mb-0 text-info">О нас</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 




	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.contact.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-info">настроить</p>
						<h3 class="mb-0 text-info">Контакты</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 
 










	


	



</div>






@endsection