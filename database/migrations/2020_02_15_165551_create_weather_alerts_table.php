<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_alerts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100);
            $table->date('date');
            $table->string('area',100);
            $table->string('content',500);
            $table->integer('a_id');
            //$table->foreign('a_id')->references('a_id')->on('authority_admins');
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
        Schema::dropIfExists('weather_alerts');
    }
}
