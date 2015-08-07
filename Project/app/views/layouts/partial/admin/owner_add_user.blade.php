<?php 
	$set = Roles::all();
	$roles = array();
	foreach ($set as $role) {
		$roles = array_merge($roles, array($role->name => $role->name));
	}
?>

@extends('homepage')
@section('main')
@if($isOwner)
	<div class="add-manager-form col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		{{Form::open(array('url' => '/admin/add-manager', 'method' => 'POST'))}}
		{{Form::label('username', 'Username')}}
		{{Form::text('username', null, array('class' => 'form-control'))}}
		{{Form::label('password', 'Password')}}
		{{Form::password('password', array('class' => 'form-control'))}}
		{{Form::label('re-password', 'Nhập lại password')}}
		{{Form::password('re-password', array('class' => 'form-control'))}}
		{{Form::label('role', 'Quyền')}}
		{{Form::select('role', $roles, 'admin', array('class' => 'form-control'))}}
		{{Form::submit('Tạo quản lý', array('class'=>'btn my-btn'))}}
		{{Form::close()}}
		@if(Session::has('err_message'))
			<div class="err_message col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
				<span>{{Session::get('err_message')}}</span>
			</div>
		@endif
		@if(Session::has('message'))
			<div class="message col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
				<span>{{Session::get('message')}}</span>
			</div>
		@endif
	</div>
@else
	<div class="user-item col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
		<span>Bạn không có quyền này</span>
	</div>
@endif
@stop

