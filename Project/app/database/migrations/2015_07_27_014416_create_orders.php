<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table){
			$table->increments('id');
			$table->string('fullname');
			$table->string('phone');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->integer('quantity');
			$table->integer('total');
			$table->string('status');
		});
	}

	/*create table orders(
    id int(10) unsigned not null auto_increment,
    fullname varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    phone varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    product_id int(10) unsigned DEFAULT NULL,
    quantity int(10),
    total int(10),
    status varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    primary key (id),
    constraint orders_product_id_foreign foreign key (product_id) references products(id) on delete cascade);*/


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
