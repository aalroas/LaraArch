<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');


            $table->string('f_image');

            $table->string('title_ar');
            $table->string('title_en');
            $table->string('title_tr');


            $table->text('text_ar');
            $table->text('text_tr');
            $table->text('text_en');

            $table->string('video_url');

            $table->text('video_text_ar');
            $table->text('video_text_en');
            $table->text('video_text_tr');



            $table->string('date');
            $table->string('location');
            $table->string('location_url');
            $table->string('status');
            $table->string('client');




            $table->string('url');





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
        Schema::dropIfExists('portfolios');
    }
}
