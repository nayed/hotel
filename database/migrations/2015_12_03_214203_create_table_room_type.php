<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoomType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function($table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('short_name', 10);
            $table->float('base_price');
            $table->integer('base_availability');
            $table->integer('max_occupancy');
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
        Schema::drop('room_types');
    }
}
