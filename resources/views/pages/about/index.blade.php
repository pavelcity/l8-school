@extends('layouts.site')
@section('title', 'Контакты')

 

@section('content')





<section class="text-gray-600 body-font">
  <div class="container px-5 py-10 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80">
      </div>
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          
            <img class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400" src="https://images.unsplash.com/photo-1606636660488-16a8646f012c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="">
          
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{ $about->title ?? 'it-school' }} </h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">improve your skills</p>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <div class="leading-relaxed text-lg mb-1">
						{!! $about->descr ?? 'no-data' !!}
					</div>
 
        </div>
      </div>
    </div>
  </div>
</section>





@endsection