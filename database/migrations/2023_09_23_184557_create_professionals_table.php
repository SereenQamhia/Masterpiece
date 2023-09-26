<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->id('professional_id');
            $table->string('name');
            $table->string('description');
            $table->string('email');
            $table->string('image');
            $table->string('cv');
            $table->string('location');
            $table->unsignedBigInteger('years of experience');
            $table->unsignedBigInteger('age');
            $table->string('gender');
            $table->decimal('price', 10, 2);
            $table->string('profission');
            $table->unsignedBigInteger('completed_jobs');
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('provider_id')->on('providers');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');
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
        Schema::dropIfExists('professionals');
    }
};
