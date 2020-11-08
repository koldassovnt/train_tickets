<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainSeatTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_seat_types', function (Blueprint $table) {
            $table->increments('train_seat_type_id');
            $table->integer('train_id')->unsigned();
            $table->integer('seat_type_id')->unsigned();
            $table->timestamps();
            $table->foreign('train_id')->references('train_id')->on('trains')->onDelete('cascade');
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
        Schema::dropIfExists('train_seat_types');
    }
}
