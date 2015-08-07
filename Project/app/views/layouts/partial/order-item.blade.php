<div class="col-xs-12 col-sm-12 col-md-12">
	<a href="/admin/order-detail/{{$order->id}}">
		<div class="col-xs-12 col-sm-12 col-md-12 order-info-min {{$order->status}}" style="padding: 10px; margin: 5px 0px 5px 0px; border:none;">
			<div class="product-img col-xs-3 col-sm-3 col-md-3" style="padding: 2px; margin: auto;">
				<img src="{{$order->path}}">
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
				<div class="col-xs-5 col-sm-5 col-md-5">
					<label for="fullname">Họ tên</label><br>
					<span>{{$order->fullname}}</span>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<label for="quantity">SL</label><br>
					<span>{{$order->quantity}}</span>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<label for="total">Thành tiền</label><br>
					<span>{{$order->total}}</span>
				</div>
			</div>
		</div>
	</a>
</div>