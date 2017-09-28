<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('site_id');
            $table->integer('materialtype_id');
            $table->integer('brand_id');
            $table->text('productname');
            $table->text('description');
            $table->text('specification')->nullable();
            $table->string('sku');
            $table->string('pricefactor');
            $table->integer('discountupto');
            $table->text('tags')->nullable();
            $table->string('product_status', 20)->default('published');
            $table->string('review_status', 50)->default('manual');
            $table->text('slug');
            $table->integer('display_order');
            $table->string('featured_pic')->nullable();
            $table->timestamps();
        });
    }
    //product pics are not mixed with other images from the site
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
