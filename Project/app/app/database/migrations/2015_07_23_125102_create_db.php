<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('privileges', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('roles', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('allowances', function(Blueprint $table){
			$table->integer('role_id')->unsigned();
			$table->integer('privilege_id')->unsigned();
			$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
			$table->foreign('privilege_id')->references('id')->on('privileges')->onDelete('cascade');
			$table->primary(array('role_id','privilege_id'));
			$table->timestamps();
		});

		Schema::create('categories', function(Blueprint $table){
			$table->increments('id');
			$table->string('slug');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('users', function(Blueprint $table){
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->integer('role_id')->unsigned();
			$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
			$table->string('remember_token')->nullable();
			$table->timestamps();
		});

		Schema::create('products', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->float('price');
			$table->timestamps();
		});

		Schema::create('images', function(Blueprint $table){
			$table->increments('id');
			$table->string('path');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('allowances');
		Schema::drop('images');
		Schema::drop('products');
		Schema::drop('categories');
		Schema::drop('users');
		Schema::drop('roles');
		Schema::drop('privileges');
	}

}
