<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEntryIdToTurtleSensorsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('turtle_sensors_data', function (Blueprint $table) {
            $table->string("entry_id")->after("longitude")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('turtle_sensors_data', function (Blueprint $table) {
            $table->dropColumn("entry_id");
        });
    }
}
