<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrevEntryIdToTurtleDataLastEntryIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('turtle_data_last_entry_ids', function (Blueprint $table) {
            $table->unsignedBigInteger("prev_entry_id")->after("turtle_key")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('turtle_data_last_entry_ids', function (Blueprint $table) {
            $table->dropColumn("prev_entry_id");
        });
    }
}
