<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('parent_id')->nullable();
            $table->integer('site_id');
            $table->string('language');
            $table->string('slug');
            $table->string('banner')->nullable();
            $table->string('description')->nullable();
            $table->text('gist')->nullable();
            $table->integer('display_order');
            $table->timestamps();
        });

        Schema::create('category_post', function(Blueprint $table) {
            $table->integer('category_id');
            $table->integer('post_id');
            $table->primary(['category_id' , 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_post');
    }
}
