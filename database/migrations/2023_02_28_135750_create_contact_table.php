<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactTable extends Migration {

	public function up()
	{
		Schema::create('contact', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('phone')->nullable();
			$table->string('email');
			$table->string('web-site');
		});
	}

	public function down()
	{
		Schema::drop('contact');
	}
}