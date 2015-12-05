<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoomCalendar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_calendars', function($table) {
            $table->increments('id');
            $table->integer('room_type_id');
            $table->integer('availability');
            $table->integer('reservation');
            $table->float('rate');
            $table->date('day');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('room_calendars');
    }
}
