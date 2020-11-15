<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('ticket_id');
            $table->integer('from_city_id')->unsigned();
            $table->integer('to_city_id')->unsigned();
            $table->integer('price');
            $table->integer('train_id')->unsigned();
            $table->timestamps();
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->foreign('from_city_id')->references('city_id')->on('cities')->onDelete('cascade');
            $table->foreign('to_city_id')->references('city_id')->on('cities')->onDelete('cascade');
            $table->foreign('train_id')->references('train_id')->on('trains')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
