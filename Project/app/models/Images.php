<?php

class Images extends \Eloquent {
	protected $table='images';
	protected $fillable = ['product_id', 'path'];
}