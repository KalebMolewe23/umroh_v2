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
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_facilitas');
            $table->unsignedBigInteger('id_money');
            $table->unsignedBigInteger('id_packet');
            $table->unsignedBigInteger('id_hotel');
            $table->string('in_condition');
            $table->string('in_condition_1');
            $table->string('in_condition_2');
            $table->string('in_condition_3');
            $table->string('in_condition_4');
            $table->string('in_condition_5');
            $table->string('in_condition_6');
            $table->string('in_condition_7');
            $table->string('in_condition_8');
            $table->string('in_condition_9');
            $table->string('in_condition_10');
            $table->string('in_condition_11');
            $table->string('in_condition_12');
            $table->string('in_condition_13');
            $table->string('in_condition_14');
            $table->string('in_condition_15');
            $table->string('in_condition_16');
            $table->string('in_condition_17');
            $table->string('in_condition_18');
            $table->string('in_condition_19');
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
        Schema::dropIfExists('conditions');
    }
};
