<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::table('posts', function($table){
            $table->integer('user_id');
=======
        schema::table('posts',function($table){
            $table->integer('user_id');

>>>>>>> refs/remotes/origin/master
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
<<<<<<< HEAD
    {
        Schema::table('posts', function($table){
            $table->dropColumn('user_id');
=======
    {  schema::table('posts',function($table){
            $table->dropColumn('user_id');

>>>>>>> refs/remotes/origin/master
        });
    }
}
