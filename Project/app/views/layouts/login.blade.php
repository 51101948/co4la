@extends('layouts.default')
	@section('contents')
	<div class="main col-xs-12 col-sm-12 col-md-12">
		@if(Session::has('err_message'))
			<div class="show-message">
				<span>{{Session::get('err_message')}}</span>
			</div>
		@endif
		<div class="login-form">
			<form action="/login" method="post">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
				<button type="submit" name="login" class="btn my-btn">Login</button>
			</form>
		</div>
	</div>
	@stop