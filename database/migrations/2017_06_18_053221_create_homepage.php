<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('homepage', function (Blueprint $table) {
            $table->string('title_page', 30);
            $table->string('jumbotron', 100);
            $table->text('description');
            $table->string('fb_link', 100);
            $table->string('twt_link', 100);
            $table->string('ins_link', 100);
            $table->text('logo_img');
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
        //
    }
}
