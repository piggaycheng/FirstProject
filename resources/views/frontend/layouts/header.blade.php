<!-- Header -->

<header id="header">
	<!-- <div>Snapshot <span>by TEMPLATED</span></div> -->
	@if (Route::has('login'))
		<div class="top-right links">
			@auth
				<a href="{{ url('/home') }}">Home</a>
				<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</a>
			@else
				<a href="{{ route('login') }}">Login</a>
				<a href="{{ route('register') }}">Register</a>
			@endauth
		</div>
	@endif
</header>