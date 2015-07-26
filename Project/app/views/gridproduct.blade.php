@extends('homepage')
@section('main')
	@foreach($products as $product)
   		@include('layouts.partial.product', array('product' => $product))
	@endforeach
	<div class="pager col-xs-12 col-sm-12 col-md-12">
		{{$products->links()}}
	</div>
@stop