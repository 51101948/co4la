<?php

class Products extends \Eloquent {
	protected $table = 'products';
	protected $fillable = ['name','price','category_id'];
	protected static $rules = ['name' => 'required', 'price' => 'required', 'category_id' => 'required'];

	public static function getRules(){
		return self::$rules;
	}
}