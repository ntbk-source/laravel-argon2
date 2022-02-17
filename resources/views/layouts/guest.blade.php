<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ $title }}</title>
	@include('layouts._partials.css')
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
		<div class="container">
			<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="/">
				{{ config('app.name') }}
			</a>
			<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon mt-2">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="navigation">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/">
							<i class="fa fa-chart-pie opacity-6  me-1"></i>
							Home
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link me-2" href="/register">
							<i class="fas fa-user-circle opacity-6  me-1"></i>
							Daftar
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link me-2" href="./login">
							<i class="fas fa-key opacity-6  me-1"></i>
							Masuk
						</a>
					</li>
				</ul>
				<ul class="navbar-nav d-lg-block d-none">
					<li class="nav-item">
						<a href="/register" class="btn btn-sm mb-0 me-1 bg-gradient-light">
							Get started
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->

	<main class="main-content  mt-0">
		<div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
			<span class="mask bg-gradient-dark opacity-6"></span>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5 text-center mx-auto">
						@isset($header)
						{{ $header }}
						@endisset
					</div>
				</div>
			</div>
		</div>
		{{ $slot }}
	</main>

	<footer class="footer py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-4 mx-auto text-center">
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
						Company
					</a>
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
						About Us
					</a>
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
						Team
					</a>
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
						Products
					</a>
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
						Blog
					</a>
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
						Pricing
					</a>
				</div>
				<div class="col-lg-8 mx-auto text-center mb-4 mt-2">
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
						<span class="text-lg fab fa-dribbble"></span>
					</a>
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
						<span class="text-lg fab fa-twitter"></span>
					</a>
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
						<span class="text-lg fab fa-instagram"></span>
					</a>
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
						<span class="text-lg fab fa-pinterest"></span>
					</a>
					<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
						<span class="text-lg fab fa-github"></span>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-8 mx-auto text-center mt-1">
					<p class="mb-0 text-secondary">
						Copyright © <script>
							document.write(new Date().getFullYear())
						</script> {{ config('app.name') }}
					</p>
				</div>
			</div>
		</div>
	</footer>

	@include('layouts._partials.js')

</body>

</html>