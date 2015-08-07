@extends('homepage')
@section('main')
<div class="detail-left col-xs-12 col-sm-6 col-md-6">
	<div class="product-info col-xs-12 col-sm-12 col-md-12">
		<div class="product-img col-xs-12 col-sm-12 col-md-12" style="padding: 0px; margin-bottom: 3px; ">
			<img src="{{$order->path}}" style="border-top-right-radius:10px; border-top-left-radius:10px; padding: 0px; " class="col-xs-12 col-sm-12 col-md-12">
		</div>
		<div class="product-min-info" style="padding: 0px; background: #d5f9d4; border-bottom-left-radius:10px; border-bottom-right-radius:10px;">
			<div class="product-name one-line col-xs-12 col-sm-12 col-md-12" style="padding: 0px 5px;">
				<span class="one-line">{{$order->product_name}}</span>
			</div>
			<div class="product-price one-line col-xs-12 col-sm-12 col-md-12" style="padding: 0px 5px;">
				<span class="one-line">{{(int)$order->product_price}}</span>
			</div>
		</div>
	</div>
</div>
<div class="detail-right col-xs-12 col-sm-6 col-md-6">
	<div class="order-info col-xs-12 col-sm-12 col-md-12">
		<div class="col-xs-6 col-sm-12 col-md-12">	
			<label for="fullname">Họ tên: </label><br>
			<span>{{$order->fullname}}</span>
		</div>
		<div class="col-xs-6 col-sm-12 col-md-12">	
			<label for="phone">Số điện thoại: </label><br>
			<span>{{$order->phone}}</span>
		</div>
		<div class="col-xs-6 col-sm-12 col-md-12">	
			<label for="quantity">Số lượng: </label><br>
			<span>{{$order->quantity}}</span>
		</div>
		<div class="col-xs-6 col-sm-12 col-md-12">	
			<label for="price">Thành tiền: </label><br>
			<span>{{$order->total}}</span>
		</div>
	</div>
</div>
@stop;
	
