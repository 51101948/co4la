<?php

class OrderController extends \BaseController {

	public function addOrder($id){
		$product = Products::where('id',$id)->first();
		$product_price = (int) $product->price;

		$name = Input::get('fullname');
		$phone = Input::get('phone');
		$quantity = (int) Input::get('quantity');
		$total = $product_price*$quantity;
		$order = array('fullname' => $name, 'phone' => $phone,
		               'quantity' => $quantity, 'total' => $product_price*$quantity,
		               'product_id' => $id);
		$validator = Validator::make($order, Orders::rules());
		if($validator->passes()){
			Orders::create($order);
			\Session::flash('message','Don hang cua ban da duoc cap nhat');
			return Redirect::back();
		}
		else{
			\Session::flash('message','Ban hay nhap day du thong tin');
			return Redirect::back();	
		}
	}

	public function listOrders(){
		if(!Auth::check())
			return Redirect::to('/login');
		$orders = Orders::orderBy('status', 'desc')->paginate(10);
		foreach ($orders as $order) {
			$img = Images::where('product_id', $order->product_id)->first();
			$order->path = $img->path;
		}
		return View::make('layouts.partial.admin.orders_manager', compact('orders'));
	}

	public function orderDetail($id){
		if(!Auth::check())
			return Redirect::to('/login');
		$order = Orders::where('id', $id)->first();
		$product = Products::where('id', $order->product_id)->first();
		$img = Images::where('product_id', $product->id)->first();
		$order->status="read";
		$order->save();

		$order->product_name = $product->name;
		$order->path = $img->path;
		$order->product_price = $product->price;

		return View::make('layouts.partial.admin.order_detail', compact('order'));//->with(array('product' => $product, 'order' => $order));
	}

}