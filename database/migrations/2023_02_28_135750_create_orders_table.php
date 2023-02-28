<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('product_id')->unsigned();
			$table->integer('quantity');
			$table->float('total-price');
			$table->float('discount');
			$table->integer('altaghize_id')->unsigned();
			$table->integer('altaqte3_id')->unsigned();
			$table->enum('m3_shalota', array(''));
			$table->text('notes')->nullable();
			$table->enum('payment_on_recieve', array(''));
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}