<x-guest-layout title="Konfirmasi password">
	<div class="container">
		<div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
			<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
				<div class="card z-index-0">
					<div class="card-body">
						<h5 class="mb-3">Konfirmasi password</h5>
						<small>Ini adalah area aplikasi yang aman. Harap konfirmasi kata sandi Anda sebelum melanjutkan.</small>
						@if(session('status'))
						<div class="alert alert-primary text-white mt-2">
							{{ session('status') }}
						</div>
						@endif
						<form method="POST" autocomplete="off" action="{{ route('password.confirm') }}" class="mt-2">
							@csrf
							<div class="mb-3">
								<x-input type="password" name="password" :value="old('password')" class="form-control-lg"></x-input>
								@error('password')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>
							<div class="text-center">
								<button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
									Masuk
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-guest-layout>