<nav>
	<ul>
		<li><a href="{{ URL::route('home') }}">Home</a></li>
		@if(Auth::check())
		
		@else
			<li><a href="{{ URL::route('show_account_signin') }}">Sign In</a></li>
			<li><a href="{{ URL::route('show_account_create') }}">Create Account</a></li>
		@endif
	</ul>
</nav>