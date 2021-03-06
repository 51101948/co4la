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
		<form action="/new-order/{{$product->id}}" method="post">
			<label for="fullname">Họ Tên</label>
			<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Tram Anh"></input>
			<label for="phone">Số điện thoại</label>
			<input class="form-control" type="text" name="phone" id="phone" onkeypress="validate(event)" placeholder="0905555555"></input>
			<label for="quantity">Số lượng</label>
			<input class="form-control" type="text" name="quantity" id="quantity" onkeypress="validate(event)" onkeyup="calTotal()" placeholder="1"></input>
			<label for="total">Thành tiền (x1000 VND): </label>
			<span id="total" name="total"></span><br>
			<button class="btn my-btn" type="submit">Đặt hàng</button>
		</form>
	</div>
	@if(Session::has('message'))
	<div class="show-message">
		<span>{{Session::get('message')}}</span>
	</div>
	@endif
</div>
@stop