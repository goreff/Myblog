<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id_post');
            $table->string('title_post', 255)->default('New_post');
            $table->integer('id_author')->unsigned();
            $table->integer('id_reviewer')->nullable()->unsigned();
            $table->timestamps();
            $table->foreign('id_author')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_reviewer')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('set null');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['id_author','id_reviewer']);
        });
        Schema::dropIfExists('posts');
    }
}
