<x-guest-layout title="Reset password">
	<div class="container">
		<div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
			<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
				<div class="card z-index-0">
					<div class="card-body">
						<h5 class="mb-3">Reset password</h5>
						@if(session('status'))
						<div class="alert alert-primary text-white">
							{{ session('status') }}
						</div>
						@endif
						<form method="POST" autocomplete="off" action="{{ route('password.update') }}">
							@csrf

							<!-- Password Reset Token -->
							<input type="hidden" name="token" value="{{ $request->route('token') }}">

							<div class="mb-3">
								<x-input type="text" name="email" :value="old('email', $request->email)" class="form-control-lg"></x-input>
								@error('email')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>
							<div class="mb-3">
								<x-input type="password" name="password" :value="old('password')" class="form-control-lg"></x-input>
								@error('password')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>
							<div class="mb-3">
								<x-input type="password" name="password_confirmation" :value="old('password_confirmation')" class="form-control-lg"></x-input>
								@error('password_confirmation')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>
							<div class="text-center">
								<button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
									Reset password
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