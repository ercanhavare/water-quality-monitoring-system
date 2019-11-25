<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurtleSensorsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turtle_sensors_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('turtle_key')->nullable();
            $table->float('ph')->nullable();
            $table->float('water_temp')->nullable();
            $table->float('water_orp')->nullable();
            $table->float('air_temp')->nullable();
            $table->float('air_humadity')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->timestamps();
            // $table->foreign('turtle_key')->references('turtle_key')->on('turtles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turtle_sensors_data');
    }
}
