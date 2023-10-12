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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professional_id');
            $table->foreign('professional_id')->references('id')->on('professionals');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('time');
            $table->string('day');
            $table->string('tools');      
            $table->string('description')->nullable();          
            $table->string('name');
            $table->string('address');
            $table->string('building');
            $table->string('phone');
            $table->string('email');
            $table->string('notes');
            $table->decimal('payment', 10, 2);
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
        Schema::dropIfExists('bookings');
    }
};
