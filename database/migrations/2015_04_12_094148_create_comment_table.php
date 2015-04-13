<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentTable extends Migration {

	public function up()
	{
		Schema::create('comment', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username', 45);
			$table->string('user_email', 60);
			$table->text('comment');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('comment');
	}
}