<?php

class Cate extends \Eloquent {
	protected $table = 'categories';
	protected $fillable = ['name', 'slug'];
}