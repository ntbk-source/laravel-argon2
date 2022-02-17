<x-guest-layout title="Lupa password">
	<div class="container">
		<div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
			<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
				<div class="card z-index-0">
					<div class="card-body">
						<h5>Lupa password</h5>
						@if(session('status'))
						<div class="alert alert-primary text-white">
							{{ session('status') }}
						</div>
						@endif
						<small class="mb-3">
							lupa kata sandi Anda? Tidak masalah. Cukup beri tahu kami alamat email
							Anda dan kami akan mengirim email kepada Anda tautan pengaturan ulang
							kata sandi yang memungkinkan Anda memilih yang baru.
						</small>
						<form method="POST" autocomplete="off" action="{{ route('password.email') }}" class="mt-3">
							@csrf
							<div class="mb-3">
								<x-input type="text" name="email" :value="old('email')" class="form-control-lg"></x-input>
								@error('email')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
									Kirim tautan
								</button>
							</div>
						</form>

					</div>
					<div class="card-footer text-center pt-0 px-lg-2 px-1">
						<p class="mb-2 text-sm mx-auto">
							Sudah punya akun ?
							<a href="/login" class="text-primary text-gradient font-weight-bold">
								Masuk
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-guest-layout>