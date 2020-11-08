<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRailcarSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('railcar_spots', function (Blueprint $table) {
            $table->increments('railcar_spot_id');
            $table->integer('railcar_id')->unsigned();
            $table->integer('spot_id');
            $table->timestamps();
            $table->foreign('railcar_id')->references('railcar_id')->on('railcars')->onDelete('cascade');
            $table->foreign('spot_id')->references('spot_id')->on('spots')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('railcar_spots');
    }
}
