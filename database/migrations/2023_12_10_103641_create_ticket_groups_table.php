<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_maskapai');
            $table->unsignedBigInteger('id_maskapai_homecoming');
            $table->string('maskapai_code');
            $table->string('seat_capasitas');
            $table->string('id_provider');
            $table->string('price_ticket');
            $table->string('departure_flight_code');
            $table->string('id_departure_city');
            $table->string('departure_date');
            $table->string('departure_time');
            $table->string('id_departure_city_arrival');
            $table->date('departure_date_arrival');
            $table->time('departure_time_arrival');
            $table->string('id_departure_city_transit');
            $table->date('departure_date_transit');
            $table->time('departure_time_transit');
            $table->string('homecoming_flight_code');
            $table->string('id_homecoming_city');
            $table->date('homecoming_date');
            $table->time('homecoming_time');
            $table->string('id_homecoming_city_arrival');
            $table->date('homecoming_date_arrival');
            $table->time('homecoming_time_arrival');
            $table->string('id_homecoming_city_transit');
            $table->date('homecoming_date_transit');
            $table->time('homecoming_time_transit');
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
        Schema::dropIfExists('ticket_groups');
    }
};
