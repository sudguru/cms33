<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filepath');
            $table->text('captions')->nullable();
            $table->integer('site_id');
            $table->timestamps();
        });

        Schema::create('file_post', function (Blueprint $table) {
            $table->integer('file_id');
            $table->integer('post_id');
            $table->primary(['file_id','post_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
        Schema::dropIfExists('file_post');
    }
}
