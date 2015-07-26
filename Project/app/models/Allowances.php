<?php

class Allowances extends \Eloquent {
	protected $table='allowances';
	protected $fillable = ['role_id', 'privilege_id'];
}