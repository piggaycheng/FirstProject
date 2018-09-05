<!-- Header -->

<header id="header">
	<!-- <div>Snapshot <span>by TEMPLATED</span></div> -->

	<!-- Search form -->
	<form class="form-inline" id="form-searchbar" action="{{ route('search') }}" method="post">
		<i class="fa fa-search" aria-hidden="true"></i>
		@csrf
		<input class="form-control form-control-sm ml-3 w-75" id="input-searchbar" name="input-searchbar" type="text" placeholder="Search" aria-label="Search">
		<input type="text" style="display: none">
	</form>
	
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