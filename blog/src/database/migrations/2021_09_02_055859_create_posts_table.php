<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('title');
            $table->longtext('body');
            $table->string('image');
            $table->mediumtext('tags')->nullable();
            $table->mediumtext('meta_tag')->nullable();
            $table->mediumtext('meta_description')->nullable();
            $table->string('slug');
            $table->mediumtext('keywords')->nullable();
            $table->integer('is_published');
            $table->integer('user_id')->nullable();
            $table->timestamp('deleted_at')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
