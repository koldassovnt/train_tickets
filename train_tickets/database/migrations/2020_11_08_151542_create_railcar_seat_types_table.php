<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRailcarSeatTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('railcar_seat_types', function (Blueprint $table) {
            $table->increments('railcar_seat_type_id');
            $table->integer('railcar_id')->unsigned();
            $table->integer('seat_type_id')->unsigned();
            $table->timestamps();
            $table->foreign('railcar_id')->references('railcar_id')->on('railcars')->onDelete('cascade');
            $table->foreign('seat_type_id')->references('seat_type_id')->on('seat_types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('railcar_seat_types');
    }
}
