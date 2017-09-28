<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productimages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('picpath');
            $table->integer('color_id')->nullable();
            $table->integer('size_id')->nullable();
            $table->boolean('lg')->default(0);
            $table->boolean('md')->default(0);
            $table->boolean('sm')->default(0);
            $table->boolean('xs')->default(0);
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
        Schema::dropIfExists('productimages');
    }
}
