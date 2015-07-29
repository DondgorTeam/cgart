<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pictures', function(Blueprint $table){
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            
            $table->foreign('category_id')
                ->references('id')
                ->on('pictures')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        Schema::table('votes', function(Blueprint $table){
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            
            $table->foreign('picture_id')
                ->references('id')
                ->on('pictures')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pictures', function (Blueprint $table) {
            $table->dropForeign('pictures_user_id_foreign');
            $table->dropForeign('pictures_category_id_foreign');
        });
        Schema::table('votes', function (Blueprint $table) {
            $table->dropForeign('votes_user_id_foreign');
            $table->dropForeign('votes_picture_id_foreign');
        });
    }
}
