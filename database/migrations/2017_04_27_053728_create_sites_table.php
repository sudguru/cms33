<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('siteUrl');
            $table->string('siteTitle')->nullable();
            $table->integer('hitCount')->nullable();
            $table->boolean('showHitCount')->default(true);
            $table->integer('postPerPage')->default(10);
            $table->text('languages')->nullable();
            $table->string('menus');
            $table->string('skinCSS')->nullable();
            $table->text('ads')->nullable();
            $table->text('slides')->nullable();
            $table->text('currencies')->nullable();
            $table->string('latlng')->nullable();
            $table->text('socials')->nullable();
            $table->text('apis')->nullable();
            $table->string('gakey')->nullable();
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
        Schema::dropIfExists('sites');
    }
}
