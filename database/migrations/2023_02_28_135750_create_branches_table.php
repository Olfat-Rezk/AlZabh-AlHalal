<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchesTable extends Migration {

	public function up()
	{
		Schema::create('branches', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->decimal('longitude');
			$table->decimal('attitude');
		});
	}

	public function down()
	{
		Schema::drop('branches');
	}
}