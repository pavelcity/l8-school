<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="{{ route('home.page') }}" class=" flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="34" height="34" viewBox="0 0 24 24">
				<path fill="#6366F1"  d="M12 3L1 9L5 11.18V17.18L12 21L19 17.18V11.18L21 10.09V17H23V9L12 3M18.82 9L12 12.72L5.18 9L12 5.28L18.82 9M17 16L12 18.72L7 16V12.27L12 15L17 12.27V16Z" />
		 </svg>
      <span class="ml-3 text-xl">Школа</span>
    </a>

    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a href="{{ route('home.page') }}" class="{{ Request::is('/') ? 'text-gray-800' : 'text-indigo-700' }} mr-5 hover:text-gray-900 ">Главная</a>

      <a href="{{ route('teachers.home') }}" class="{{ Request::is('teachers*') ? 'text-gray-800' : 'text-indigo-700' }} mr-5 hover:text-gray-900 ">Учителя</a>

      <a href="{{ route('student.home') }}" class="{{ Request::is('students') ? 'text-gray-800' : 'text-indigo-700' }} mr-5 hover:text-gray-900 ">Студенты</a>

      <a href="{{ route('about.home') }}" class="{{ Request::is('about') ? 'text-gray-800' : 'text-indigo-700' }} mr-5 hover:text-gray-900 ">О нас</a>
      <a href="{{ route('contact.home') }}" class="{{ Request::is('contact') ? 'text-gray-800' : 'text-indigo-700' }} mr-5 hover:text-gray-900 ">Контакты</a>
    </nav>
		
 

		<div class="mt-5 sm:mt-0">
			<a href="#" class="bg-indigo-500 px-4 py-1.5 rounded text-white inlie-block uppercase text-xs hover:bg-gray-100 transition hover:text-indigo-500">я студент</a>
			<a href="{{ route('dashteacher.home') }}" class="bg-indigo-500 px-4 py-1.5 rounded text-white inlie-block uppercase text-xs hover:bg-gray-100 transition hover:text-indigo-500">я преподаватель</a>
		</div>

  </div>
</header>
