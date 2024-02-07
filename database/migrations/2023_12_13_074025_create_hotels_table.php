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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_packet');
            $table->unsignedBigInteger('id_hotel_mekah');
            $table->unsignedBigInteger('id_hotel_madinah');
            $table->string('type_hotel_1');
            $table->string('quad_1');
            $table->string('triple_1');
            $table->string('double_1');
            $table->string('type_hotel_2');
            $table->string('quad_2');
            $table->string('triple_2');
            $table->string('double_2');
            $table->string('type_hotel_3');
            $table->string('quad_3');
            $table->string('triple_3');
            $table->string('double_3');
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
        Schema::dropIfExists('hotels');
    }
};
