<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postdatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->string('fieldname');
            $table->string('control');
            $table->string('options');
            $table->integer('required');
            $table->text('data_value');
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
        Schema::dropIfExists('postdatas');
    }
}
