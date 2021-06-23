@extends('layouts.admin')
@section('title', 'Контакты создать')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Контакты</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt text-info'></i></a>
					</li>
					<li class="breadcrumb-item active " aria-current="page"><a href="{{ route('dashboard.contact.home') }}" class="text-info">Контакты</a></li>
					<li class="breadcrumb-item active" aria-current="page">Создать</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->












	<div class="card radius-5">
		<div class="card-body">



			@if(true)
			<form action="{{ route('dashboard.contact.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
				@csrf
		
				<div class="card-title">
					<button type="submit" class="btn btn-info m-1 px-5 py-2">Создать</button>
					<a href="{{ route('dashboard.contact.home') }}" class="btn btn-outline-info m-1 px-5 py-2">Назад</a>
				</div>
				<hr/>



			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">КОНТАКТЫ</a>
				</li>
			</ul>








			<div class="tab-content p-3" id="myTabContent">

				{{-- #статья --}}
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					
					
								{{-- ### --}}
					
							<br>
							<div class="form-group">
								<label for="title">Название  </label>
								<input class="form-control form-control-lg" id="title" name="title" type="text" placeholder="Название" value="{{ old('title') }}">
								@error('title')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<br>
							<div class="form-group">
								<label for="adres">Адрес </label>
								<input class="form-control form-control-lg" id="adres" name="adres" type="text" placeholder="Адрес" value="{{ old('adres') }}">
								@error('adres')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<br>
							<div class="form-group">
								<label for="phone">Телефон </label>
								<input class="form-control form-control-lg" id="phone" name="phone" type="text" placeholder="Телефон" value="{{ old('phone') }}">
								@error('phone')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<br>
							<div class="form-group">
								<label for="email">Email </label>
								<input class="form-control form-control-lg" id="phoemaile" name="email" type="text" placeholder="email" value="{{ old('email') }}">
								@error('email')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<br>
							<div class="form-group">
								<label for="map">Карта. Создать яндекс карту можно <a href="https://yandex.ru/map-constructor/" target="_blank">здесь</a> &nbsp; | &nbsp; Возьмите javascript код и вставьте в это поле</label>
								<textarea id="map" name="map" class="form-control" rows="7" cols="3">{{ old('map') }}</textarea>
								@error('email')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>
					
					
		
				</div>
				{{-- #статья END --}}













			</div>






			<hr>
			<button type="submit" class="btn btn-info m-1 px-5 py-2">Создать</button>
			<a href="{{ route('dashboard.contact.home') }}" class="btn btn-outline-info m-1 px-5 py-2">Назад</a>

		</form>
		@endif



		</div>
	</div>





	







@push('scripts')
	<script>
		$(document).ready(function(){
			$('#avatar').change(function(e){
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#showPic').attr('src', e.target.result);
				}
				reader.readAsDataURL(e.target.files['0']);
			});
		});
	</script>	


<script>
	$(document).ready(function(){
		$('#avatar2').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic2').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


<script>
	$(document).ready(function(){
		$('#avatar480').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic480').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	

<script>
	$(document).ready(function(){
		$('#avatar414').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic414').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	

<script>
	$(document).ready(function(){
		$('#avatarogimg').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPicogimg').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


@endpush







@push('scripts')
	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>


	<script>
		ClassicEditor
				.create( document.querySelector('#short') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#descr') )
				.catch( error => {
						console.error( error );
				} );
	</script>

@endpush







@endsection


