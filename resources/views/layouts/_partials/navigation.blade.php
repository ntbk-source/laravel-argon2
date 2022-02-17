<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
	<div class="sidenav-header">
		<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
		<a class="navbar-brand m-0" href="/">
			<img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
			<span class="ms-1 font-weight-bold">
				{{ config('app.name') }}
			</span>
		</a>
	</div>
	<hr class="horizontal dark mt-0">
	<div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
		<ul class="navbar-nav">
			<x-nav-link href="/" icon="ni ni-tv-2 text-primary" :active="request()->routeIs('dashboard')">
				Home
			</x-nav-link>
			<li class="nav-item mt-3">
				<h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Akun</h6>
			</li>
			<x-nav-link href="/profile" icon="ni ni-single-02 text-dark" :active="request()->routeIs('profile')">
				Profile
			</x-nav-link>
		</ul>
	</div>
	<div class="sidenav-footer mx-3 ">
		<div class="card card-plain shadow-none" id="sidenavCard">
			<img class="w-50 mx-auto" src="{{ asset('assets/img/illustrations/icon-documentation.svg') }}" alt="sidebar_illustration">
			<div class="card-body text-center p-3 w-100 pt-0">
				<div class="docs-info">
					<h6 class="mb-0">Need help?</h6>
					<p class="text-xs font-weight-bold mb-0">Please check our docs</p>
				</div>
			</div>
		</div>
		<a href="javascript:;" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">
			Documentation
		</a>
		<a class="btn btn-primary btn-sm mb-0 w-100" href="javascript:;" type="button">
			Upgrade to pro
		</a>
	</div>
</aside>