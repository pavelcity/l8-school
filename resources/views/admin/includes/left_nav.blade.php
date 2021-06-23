<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
<!--
				<div class="">
					<img src="{{ asset('adminka/assets/images/logo-icon.png') }}" class="logo-icon-2" alt="" />
				</div>
-->
				<div>
					<h4 class="logo-text">Админка</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>





			<!--navigation-->
			<ul class="metismenu" id="menu">

				<li class="menu-label">админка</li>



				<li class="{{ Request::is('dashboard') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.home') }}">
						<div class="parent-icon text-primary"><i class="bx bx-checkbox-square"></i>
						</div>
						<div class="menu-title text-primary">Главная</div>
					</a>
				</li>



 
				<li class="{{ Request::is('dashboard/about*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.about.home') }}">
						<div class="parent-icon text-primary"> <i class="bx bx-award"></i>
						</div>
						<div class="menu-title text-primary">О нас</div>
					</a>
				</li>


			

				
				<li class="{{ Request::is('dashboard/contact*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.contact.home') }}">
						<div class="parent-icon text-primary"> <i class="bx bx-phone"></i>
						</div>
						<div class="menu-title text-primary">Контакты</div>
					</a>
				</li>







				<li class="#">
					<a href="#">
						<div class="parent-icon text-primary"> <i class="bx bx-cog"></i>
						</div>
						<div class="menu-title text-primary">Профиль</div>
					</a>
				</li>










				<li class="menu-label">Школа</li>

				<li class="{{ Request::is('dashboard/student*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.student.home') }}">
						<div class="parent-icon text-primary"> <i class="bx bx-game"></i>
						</div>
						<div class="menu-title text-primary">Студенты</div>
					</a>
				</li>
	
				





				<li class="menu-label">Перейти на главную сайта</li>

				<li>
					<a href="{{ route('home.page') }}">
						<div class="parent-icon text-secondary"><i class="bx bx-pointer"></i>
						</div>
						<div class="menu-title text-secondary">На сайт</div>
					</a>
				</li>



	

		
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->