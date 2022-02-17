<x-guest-layout title="Verifikasi email">
	<div class="container">
		<div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
			<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
				<div class="card z-index-0">
					<div class="card-body">
						<h5 class="mb-3">Verifikasi email</h5>
						<small>
							Terima kasih telah mendaftar! Sebelum memulai, dapatkah Anda memverifikasi
							alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan
							melalui email kepada Anda? Jika Anda tidak menerima email tersebut, kami
							akan dengan senang hati mengirimkan email lain kepada Anda.
						</small>
						@if (session('status') == 'verification-link-sent')
						<div class="alert alert-success text-white">
							Tautan verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.
						</div>
						@endif
						<div class="d-flex mt-2">
							<form method="POST" action="{{ route('verification.send') }}" class="me-2">
								@csrf
								<button type="submit" class="btn bg-gradient-dark w-100 my-4">
									Kirim ulang
								</button>
							</form>

							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<button type="submit" class="btn bg-gradient-danger w-100 my-4">
									Logout
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-guest-layout>