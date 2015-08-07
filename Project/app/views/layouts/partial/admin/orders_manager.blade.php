@extends('homepage')
@section('main')
@foreach($orders as $order)
	@include('layouts.partial.order-item', compact('order'))
@endforeach
@stop