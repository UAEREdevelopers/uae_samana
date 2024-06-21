<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id')->unsigned();
            $table->string('gallery_image')->nullable();
            $table->string('gallery_thumbnail_image')->nullable();
            $table->integer('is_mix')->unsigned();
            $table->integer('is_ext')->unsigned();
            $table->integer('is_int')->unsigned();
            $table->integer('is_amenity')->unsigned();
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
        Schema::dropIfExists('galleries');
    }
}
