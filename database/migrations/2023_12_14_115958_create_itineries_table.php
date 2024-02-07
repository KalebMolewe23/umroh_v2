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
        Schema::create('itineries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_photo');
            $table->string('activity');
            $table->string('activity_2');
            $table->string('activity_3');
            $table->string('activity_4');
            $table->string('activity_5');
            $table->string('activity_6');
            $table->string('activity_7');
            $table->string('activity_8');
            $table->string('activity_9');
            $table->string('activity_10');
            $table->string('activity_11');
            $table->string('activity_12');
            $table->string('activity_13');
            $table->string('activity_14');
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
        Schema::dropIfExists('itineries');
    }
};
