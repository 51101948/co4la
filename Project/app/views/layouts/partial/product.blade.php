<div class="product-item col-xs-6 col-sm-6 col-md-4">
	<a href="/product/detail/{{$product->slug}}">
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
	</a>
</div>
<!-- /*height: 169px; width:100%;*/ /*max-height: 169px;*/ -->