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
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('site_id');
            $table->text('title');
            $table->text('video_url')->nullable();
            $table->text('excerpt');
            $table->text('content');
            $table->string('post_status', 20)->default('published');
            $table->string('comment_status', 50)->default('manual');
            $table->text('slug');
            $table->text('display_order');
            $table->integer('role_id');
            $table->string('language');
            $table->integer('gallery_id')->nullable();
            $table->string('timeline_title')->nullable();
            $table->string("post_type")->default('article'); //video, article, gallery
            $table->integer('featured_pic_id')->nullable();
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
