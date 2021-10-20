<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title')->nullable();
            $table->longtext('detail');
            $table->string('url');
            $table->integer('is_published');            
            $table->mediumtext('tags')->nullable();
            $table->mediumtext('meta_tag')->nullable();
            $table->mediumtext('meta_description')->nullable();
            $table->mediumtext('keywords')->nullable();            
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
        Schema::dropIfExists('pages');
    }
}
