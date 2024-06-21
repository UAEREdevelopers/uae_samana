<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('no_of_beds')->nullable();
            $table->string('price')->nullable();
            $table->string('payment_construction')->nullable();
            $table->string('payment_handover')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('carousel_image')->nullable();
            $table->string('carousel_image_mobile')->nullable();
            $table->string('preview_image')->nullable();
            $table->string('property_video')->nullable();
            $table->string('brochure_pdf')->nullable();
            $table->string('floorplan_pdf')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->mediumText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
