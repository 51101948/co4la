@extends('homepage')
@section('main')
@if($users!=null)
	@foreach($users as $user)
		@include('layouts.partial.admin.owner_user_item', compact('user'))
	@endforeach
@else
	<div class="user-item col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
		<span>Bạn không có quyền này</span>
	</div>
@endif
@stop