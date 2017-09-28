<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picpath');
            $table->text('captions')->nullable();
            $table->boolean('lg')->default(0);
            $table->boolean('md')->default(0);
            $table->boolean('sm')->default(0);
            $table->boolean('xs')->default(0);
            $table->integer('site_id');
            $table->timestamps();
        });

        Schema::create('pic_post', function (Blueprint $table) {
            $table->integer('pic_id');
            $table->integer('post_id');
            $table->primary(['pic_id','post_id']);
        });

        Schema::create('gallery_pic', function (Blueprint $table) {
            $table->integer('gallery_id');
            $table->integer('pic_id');
            $table->primary(['gallery_id','pic_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pics');
        Schema::dropIfExists('pic_post');
        Schema::dropIfExists('gallery_pic');
    }
}
