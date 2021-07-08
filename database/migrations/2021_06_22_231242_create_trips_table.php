<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->integer('economy_seats');
            $table->integer('economy_price');
            $table->integer('business_seats');
            $table->integer('business_price');
            $table->timestamp('trip_date');
            $table->unsignedBigInteger('to_airport_id');
            $table->unsignedBigInteger('from_airport_id');
            $table->foreign('to_airport_id')->references('id')->on('airports');
            $table->foreign('from_airport_id')->references('id')->on('airports');
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
        Schema::dropIfExists('trips');
    }
}
