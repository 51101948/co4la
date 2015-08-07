<?php
	$curr_cate = Cate::where('id', $product->category_id)->first();
	$curr_slug = $curr_cate->slug;
	$set = Cate::all();
	$categories = array();
	foreach ($set as $item) {
		$tag=$item->name;
		$categories = array_merge($categories, array($item->slug => $tag));
	}
?>
@extends('homepage')
@section('main')
<div class="detail-left col-xs-12 col-sm-6 col-md-6">
	<div class="product-info col-xs-12 col-sm-12 col-md-12">
		<div class="product-img col-xs-12 col-sm-12 col-md-12" style="padding: 0px; margin-bottom: 3px; ">
			<img src="{{$product->path}}" style="border-top-right-radius:10px; border-top-left-radius:10px; padding: 0px; " class="col-xs-12 col-sm-12 col-md-12">
		</div>
		<div class="product-min-info" style="padding: 0px; background: #d5f9d4; border-bottom-left-radius:10px; border-bottom-right-radius:10px;">
			<div class="product-name one-line col-xs-12 col-sm-12 col-md-12" style="padding: 0px 5px;">
				<span class="one-line">{{$product->name}}</span>
			</div>
			<div class="product-price one-line col-xs-12 col-sm-12 col-md-12" style="padding: 0px 5px;">
				<span class="one-line">{{(int)$product->price}}</span>
			</div>
		</div>
	</div>
</div>
<div class="detail-right col-xs-12 col-sm-6 col-md-6">
	<div class="order-form">	
		<form action="/admin/edit/{{$product->slug}}" method="post">
			{{Form::label('category', 'Category')}}
			{{Form::select('category', $categories, $curr_slug, array('class' => 'form-control'))}}
			<label for="name">Tên sản phẩm</label>
			<input type="text" id="name" name="name" class="form-control"></input>
			<label for="price">giá tiền</label>
			<input class="form-control" type="text" name="price" id="price" onkeypress="validate(event)" placeholder="x1000 VND"></input>
			<button class="btn my-btn" type="submit">Cập nhật</button>
			<a href="/admin/delete/product/{{$product->id}}" class="btn my-btn glyphicon glyphicon-trash" style="color: white; margin-right: 2px;"></a>
		</form>
	</div>
	@if(Session::has('message'))
	<div class="show-message">
		<span>{{Session::get('message')}}</span>
	</div>
	@endif
</div>
@stop