<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	public function up()
	{
		Schema::create('category', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('slug', 255)->unique();
		});
	}

	public function down()
	{
		Schema::drop('category');
	}
}