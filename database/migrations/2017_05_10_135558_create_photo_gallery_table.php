<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
         Schema::create('photo_gallery', function (Blueprint $table) {
            $table->string('id_photo', 10);
            $table->string('name_photo');
            $table->text('description');
            $table->integer('status');
            $table->integer('id_gallery');
            $table->timestamps();
            $table->foreign('id_gallery')->references('id_gallery')->on('gallery')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gallery');
    }
}
