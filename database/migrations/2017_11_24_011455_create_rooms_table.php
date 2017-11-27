<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('room_id');
            $table->string('room_name');
            $table->integer('request');
            $table->string('tax_list');
            $table->decimal('price', 8, 2);
            $table->string('request_url');
            $table->string('conditions');
            $table->string('cancellation');
            $table->decimal('taxes', 8, 2);
            $table->decimal('fees', 8, 2);
            $table->string('place_id');
            $table->integer('p_pics');
            $table->date('date_AVAILABLE');
            $table->boolean('promos');
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
        Schema::dropIfExists('rooms');
    }
}
