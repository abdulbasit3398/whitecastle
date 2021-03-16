<aside class="main-sidebar">
	<!-- sidebar-->
	<section class="sidebar">
		<div class="user-profile px-30 py-15">
			<div class="d-flex align-items-center">			
				<div class="image">
					<img src="{{asset('assets/admin/images/avatar/1.jpg')}}" class="avatar avatar-lg" alt="User Image">
				</div>
				<div class="info">
					<a class="dropdown-toggle px-20" data-toggle="dropdown" href="#">{{\Auth::user()->name}}</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
						<a class="dropdown-item" href="#"><i class="ti-link"></i> Connections</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
					</div>
				</div>
			</div>
			<!-- <ul class="list-inline profile-setting mt-10 mb-0 d-flex justify-content-between">
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Search"><i data-feather="search"></i></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Notification"><i data-feather="bell"></i></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Chat"><i data-feather="message-square"></i></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Logout"><i data-feather="log-out"></i></a></li>
			</ul> -->
		</div>

		<!-- sidebar menu-->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MENU</li>
			<li>
				<a href="{{route('admin.dashboard')}}">
					<img src="{{asset('assets/admin/images/svg-icon/dashboard.svg')}}" class="svg-icon" alt="">
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{url('admin/categories')}}">
					<img src="{{asset('assets/admin/images/svg-icon/sidebar-menu/apps.svg')}}" class="svg-icon" alt="">
					<span>Categories</span>
				</a>
			</li>
			<li>
				<a href="{{route('my-account')}}">
					<img src="{{asset('assets/admin/images/svg-icon/sidebar-menu/apps.svg')}}" class="svg-icon" alt="">
					<span>My Account</span>
				</a>
			</li>
			<li>
				<a href="{{route('pricing')}}">
					<img src="{{asset('assets/admin/images/svg-icon/sidebar-menu/transactions.svg')}}" class="svg-icon" alt="">
					<span>Pricing</span>
				</a>
			</li>
			<li>
				<a href="{{route('contact')}}">
					<img src="{{asset('assets/admin/images/svg-icon/telephone.svg')}}" class="svg-icon" alt="">
					<span>Contact</span>
				</a>
			</li>

		</ul>
		<a href="#" class="sidebar-menu tree">
			<img src="{{asset('assets/admin/images/add.png')}}">
		</a>
	</section>
</aside>