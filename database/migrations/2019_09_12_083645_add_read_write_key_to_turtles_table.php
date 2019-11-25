<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReadWriteKeyToTurtlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('turtles', function (Blueprint $table) {
            $table->string('write_api_key')->after("turtle_key")->nullable();
            $table->string('read_api_key')->after("write_api_key")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('turtles', function (Blueprint $table) {
            $table->dropColumn('write_api_key');
            $table->dropColumn('read_api_key');
        });
    }
}
