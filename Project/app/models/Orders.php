<?php

class Orders extends \Eloquent {
	protected $table = 'orders';
	protected $fillable = ['fullname', 'phone', 'product_id', 'quantity'];
	protected static $rules = ['fullname' => 'required', 'phone' => 'required', 'quantity' => 'required'];

	public static function rules(){
		return self::$rules;
	}
}