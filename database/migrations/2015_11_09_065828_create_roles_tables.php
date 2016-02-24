<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function(Blueprint $table){
           $table->increments('id');
           $table->string('name');
           $table->string('label')->nullable();
           $table->timestamps(); 
        });
        
        Schema::create('role_user', function(Blueprint $table){
            $table->integer('role_id')->unsigned();
            $table->integer('user_id')->unsigned();
            
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
            $table->primary(['role_id', 'user_id']);
        });
        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_user', function (Blueprint $table) {
            $table->dropForeign('role_user_role_id_foreign');
            $table->dropForeign('role_user_user_id_foreign');
        });
        Schema::drop('roles');
        Schema::drop('role_user');
    }
}
