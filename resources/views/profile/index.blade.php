<x-app-layout title="Profile">
	<div class="card shadow-lg ">
		<div class="card-body p-3">
			<div class="row gx-4">
				<div class="col-auto">
					<div class="avatar avatar-xl position-relative">
						<img src="{{ asset('assets/img/default.jpg') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
					</div>
				</div>
				<div class="col-auto my-auto">
					<div class="h-100">
						<h5 class="mb-1">
							{{ Auth::user()->name }}
						</h5>
						<p class="mb-0 font-weight-bold text-sm">
							Member
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-12">
			<div class="card ">
				<div class="card-body">
					<h5>Profile</h5>
					<form action="/profile" method="post" autocomplete="off" id="form-profile">
						@csrf
						<div class="row mb-3">
							<div class="col-md-6 mb-3">
								<x-label for="name">Nama</x-label>
								<x-input type="text" name="name" id="name" :value="old('name', Auth::user()->name)"></x-input>
								<x-invalid key="name"></x-invalid>
							</div>
							<div class="col-md-6">
								<x-label for="email">Email</x-label>
								<x-input type="text" name="email" id="email" :value="old('email', Auth::user()->email)" readonly></x-input>
								<x-invalid key="email"></x-invalid>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6 mb-3">
								<x-label for="password">Password baru</x-label>
								<x-input type="password" name="password" id="password"></x-input>
								<x-invalid key="password">
									<small class="text-muted">Kosongkan jika tidak diubah</small>
								</x-invalid>
							</div>
							<div class="col-md-6">
								<x-label for="password_confirmation">Konfirmasi password baru</x-label>
								<x-input type="password" name="password_confirmation" id="password_confirmation"></x-input>
								<x-invalid key="password_confirmation">
									<small class="text-muted">Kosongkan jika tidak diubah</small>
								</x-invalid>
							</div>
						</div>
						<div class="mb-3 text-end">
							<button type="submit" class="btn btn-primary submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</x-app-layout>