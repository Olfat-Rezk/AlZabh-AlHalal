<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->foreignId('category_id')->unsigned()->constrained('categories')->cascadeOnDelete();
			$table->string('photo');
			$table->float('price');
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}
