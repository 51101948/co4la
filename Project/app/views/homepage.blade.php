<?php 
	$checker = new CommonController();
	$isOwner = $checker->isOwner();
?>
@extends('layouts.default')
@section('contents')
	<div class="side-bar col-xs-12 col-sm-4 col-md-4">
		@if($isOwner)
			@include('layouts.partial.admin.owner_only')
		@endif
		<div class="search">
			@include('layouts.partial.search')
		</div>
		<div class="categories">
			@include('layouts.partial.categories')
		</div>
	</div>
	<div class="main col-xs-12 col-sm-8 col-md-8">
		@yield('main')
	</div>
@stop