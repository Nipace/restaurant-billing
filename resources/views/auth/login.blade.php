@extends('layouts.auth')

@section('content')
<div class="d-flex flex-column flex-root">
	<div class="login login-6 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
		<div
			class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
			<div class="d-flex flex-row-fluid flex-column justify-content-between">
				<div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
					<a href="#" class="mb-15 text-center">
						<img src="{{ asset('storage/'. session('settings_restaurant_logo'))}}" class="max-h-75px"
							alt="" />
					</a>
					<div class="login-form login-signin">
						<div class="text-center mb-10 mb-lg-20">
							<h2 class="font-weight-bold">Sign In</h2>
							<p class="text-muted font-weight-bold">Enter your username and password</p>
						</div>
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<div class="form-group py-3 m-0">
								<input
									class="form-control h-auto border-0 px-0 placeholder-dark-75  @error('email') is-invalid @enderror"
									type="Email" placeholder="Email" name="email" value="{{ old('email') }}" required
									autocomplete="email" autofocus />
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group py-3 border-top m-0">

								<input
									class="form-control h-auto border-0 px-0 placeholder-dark-75  @error('password') is-invalid @enderror"
									type="Password" placeholder="Password" name="password" />
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
								<label class="checkbox checkbox-outline m-0 text-muted">
									<input type="checkbox" name="remember" id="remember"
										{{ old('remember') ? 'checked' : '' }} />Remember me
									<span></span></label>
							</div>
							<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
								<div class="my-3 mr-2">
								</div>
								<button type="submit" id="kt_login_signin_submit"
									class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
							</div>
						</form>
					</div>


				</div>
				<!--end::Aside body-->

			</div>
			<!--end: Aside Container-->
		</div>
		<!--begin::Aside-->
		<!--begin::Content-->
		<div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7"
			style="background-image: url(assets/media/bg/bg-4.jpg);">
			<!--begin::Content body-->
			<div class="d-flex flex-column-fluid flex-lg-center">
				<div class="d-flex flex-column justify-content-center">
					<h3 class="display-3 font-weight-bold my-7 text-white">Welcome to
						{{ Session::get('settings_restaurant_name') }}</h3>
					<p class="font-weight-bold font-size-lg text-white opacity-80">Take orders quickly and bring the
						profits.</p>
				</div>
			</div>
			<!--end::Content body-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Login-->
</div>

@endsection