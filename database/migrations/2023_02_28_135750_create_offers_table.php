<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffersTable extends Migration {

	public function up()
	{
		Schema::create('offers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->decimal('percent');
			$table->string('name');
			$table->date('expirationn_date');
		});
	}

	public function down()
	{
		Schema::drop('offers');
	}
}