<?php
	$set = Cate::all();
	$categories = array();
	foreach ($set as $item) {
		$tag=$item->name;
		$categories = array_merge($categories, array($item->slug => $tag));
	}
?>
@extends('homepage')
@section('main')
	<div class="add-product-form col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
	{{Form::open(array('files'=>true, 'url' => '/admin/new-product', 'method' => 'POST'))}}
	{{Form::label('category', 'Category')}}
	{{Form::select('category', $categories, null, array('class' => 'form-control'))}}
	{{Form::label('name', 'Ten SP')}}
	{{Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'San pham abc'))}}
	{{Form::label('price', 'Gia: x1000')}}
	{{Form::text('price', null, array('class' => 'form-control', 'onkeypress' => 'validate(event)'))}}
	{{Form::label('images', 'Hinh anh SP')}}
	{{Form::file('images[]', array('class'=>'form-control', 'multiple' => 'multiple', 'enctype' => 'multipart/form-data'))}}
	{{Form::submit('Submit', array('class'=>'btn my-btn'))}}
	{{Form::close()}}
	</div>
	@if(Session::has('message'))
	<div class="show-message">
		<span>{{Session::get('message')}}</span>
	</div>
	@endif
@stop