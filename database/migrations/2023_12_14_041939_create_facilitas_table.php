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
        Schema::create('facilitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_money');
            $table->unsignedBigInteger('id_packet');
            $table->unsignedBigInteger('id_hotel');
            $table->string('in_facilitas');
            $table->string('in_facilitas_1');
            $table->string('in_facilitas_2');
            $table->string('in_facilitas_3');
            $table->string('in_facilitas_4');
            $table->string('in_facilitas_5');
            $table->string('in_facilitas_6');
            $table->string('in_facilitas_7');
            $table->string('in_facilitas_8');
            $table->string('in_facilitas_9');
            $table->string('out_facilitas');
            $table->string('out_facilitas_1');
            $table->string('out_facilitas_2');
            $table->string('out_facilitas_3');
            $table->string('out_facilitas_4');
            $table->string('out_facilitas_5');
            $table->string('out_facilitas_6');
            $table->string('out_facilitas_7');
            $table->string('out_facilitas_8');
            $table->string('out_facilitas_9');
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
        Schema::dropIfExists('facilitas');
    }
};
