<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productcategories', function (Blueprint $table) {
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

        Schema::create('product_productcategory', function(Blueprint $table) {
            $table->integer('productcategory_id');
            $table->integer('product_id');
            $table->primary(['productcategory_id' , 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productcategories');
        Schema::dropIfExists('product_productcategory');
    }
}
