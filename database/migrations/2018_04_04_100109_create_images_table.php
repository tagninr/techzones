<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('file_path');
            $table->integer('imageable_id')->unsigned()->nullable();
            $table->foreign('imageable_id')->references('id')->on('brands');
            // $table->foreign('imageable_id')->references('id')->on('categories');
            // $table->foreign('imageable_id')->references('id')->on('products');
            // $table->foreign('imageable_id')->references('id')->on('attribute_values');
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
        Schema::dropIfExists('images');
    }
}
