<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration {

	public function up()
	{
		Schema::create('cart', function(Blueprint $table) {
			$table->increments('id');
            $table->uuid('cart_id');
			$table->timestamps();
			//$table->foreignId('product_id')->unsigned()->constrained('products')->cascadeOnDelete();
			$table->foreignId('user_id')->unsigned()->nullable()->constrained('users')->cascadeOnDelete();
            //$table->unique(['cart_id','product_id']);
		});
	}

	public function down()
	{
		Schema::drop('cart');
	}
}
