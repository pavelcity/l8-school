@extends('layouts.site')
@section('title', 'учителя')

 

@section('content')




<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $teacher->name ?? 'нет данных' }}</h1>
      <p class="mb-8 leading-relaxed">Преподаватель предмета <span class="font-bold text-indigo-500">{{ $teacher->tema ?? 'нет данных' }}</span> <br>
			На этой странице вы можете забронировать время консультации
			</p>
      
			<div class="flex justify-center">
        <a href="tel:{{ $teacher->phone ?? 'нет данных' }}" class="inline-flex text-white bg-indigo-500 border-0 py-1.5 px-6 focus:outline-none hover:bg-indigo-600 rounded text-xs">{{ $teacher->phone ?? 'нет данных' }}</a>

        <a href="mailto:{{ $teacher->email ?? 'нет данных' }}" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-1.5 px-6 focus:outline-none hover:bg-gray-200 rounded text-xs">{{ $teacher->email ?? 'нет данных' }}</a>

				<a href="{{ route('home.page') }}" class="inline-flex ml-4 text-white border border-indigo-600 bg-indigo-100 text-indigo-600 border-0 py-1.5 px-6 focus:outline-none hover:bg-indigo-600 hover:text-indigo-100 transition rounded text-xs">Назад</a>
      </div>

    </div>
  </div>
</section>





<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
      
			
			@foreach ($teacher->shedulers as $sheduler)
			<div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">
						
						<div class="font-extralight text-sm">Статус консультации</div>
						@if($sheduler->status == 1)
							<div class="bg-blue-500 text-white px-3 py-1.5 inline-block text-sm">Открыта</div>
						@elseif($sheduler->status == 2)
							<div class="bg-green-500 text-white px-3 py-1.5 inline-block text-sm">Одобрено</div>
						@elseif($sheduler->status == 3)
						<div class="bg-red-500 text-white px-3 py-1.5 inline-block text-sm">Закрыто</div>
						@endif

					</span>

          <span class="mt-1 mt-5 text-gray-500 text-sm">
						{{ $sheduler->day ?? '' }} <br> {{ $sheduler->time ?? '' }}
					</span>
        </div>

        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">
					 <span class="font-thin">Тема:</span>	{{ $sheduler->title ?? '' }}
					</h2>
          <p class="leading-relaxed">
						{!! $sheduler->descr ?? '' !!}
					</p>

					@if($sheduler->status == 3)
          <div class="text-gray-900 inline-flex items-center mt-4 line-through">Запись уже закрыта</div>
					<a href="{{ route('home.page') }}" class="text-yellow-700 block hover:text-blue-800 transition">Вы можете посмотреть доступные консультации здесь</a>
					@else

					<a href="#" class="zapisatsa text-blue-500 hover:text-gray-500 inline-flex items-center mt-4">Записаться
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
					@endif

        </div>
      </div>
			@endforeach



    </div>
  </div>
</section>


@endsection