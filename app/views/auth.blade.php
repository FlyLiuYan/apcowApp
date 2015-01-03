@extends('layout.main')
@section('content')
	<div>
		<label for='username' style='display:block;width:280px;text-align:right'>username:<input type='input' name='username' /></label><br />
		<label for='email' style='display:block;width:280px;text-align:right'>email:<input type='input' name='email' /></label><br />
		<label for='password' style='display:block;width:280px;text-align:right'>password:<input type='password' name='password' /></label><br />
		<label for='password_again' style='display:block;width:280px;text-align:right'>password again:<input type='password' name='password_again' /></label>
	</div>
@stop