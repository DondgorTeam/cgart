<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username', 30)->unique();
			$table->string('email', 100)->unique();
			$table->string('password', 100);
			$table->enum('type', array('author', 'editor', 'admin'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}