@extends('homepage')
@section('main')
<div class="detail-left col-xs-12 col-sm-6 col-md-6">
	<div class="product-info">
		<div class="product-img">
			<img src="{{$product->path}}">
		</div>
		<div class="detail-info">
			<div class="product-name">
				<span>Ten SP: {{$product->name}}</span>
			</div>
			<div class="product-price">
				<span>Gia (x1000 VND): </span>
				<span id="item-price">{{$product->price}}</span>
			</div>
		</div>
	</div>
</div>
<div class="detail-right col-xs-12 col-sm-6 col-md-6">
	<div class="order-form">	
		<form action="#" method="post">
			<label for="fullname">Ho Ten</label>
			<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Tram Anh"></input>
			<label for="phone">So dien thoai</label>
			<input class="form-control" type="text" name="phone" id="phone" placeholder="0905555555"></input>
			<label for="quantity">So luong</label>
			<input class="form-control" type="text" name="quantity" id="quantity" onkeypress="validate(event)" onkeyup="calTotal()" placeholder="1"></input>
			<label for="total">Thanh tien (VND): x1000</label>
			<span id="total" name="total"></span><br>
			<button class="btn my-btn" type="submit">Dat hang</button>
		</form>
	</div>
</div>
@stop