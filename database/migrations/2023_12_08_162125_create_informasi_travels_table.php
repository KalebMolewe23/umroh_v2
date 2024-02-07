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
        Schema::create('informasi_travels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_province');
            $table->unsignedBigInteger('id_regencies');
            $table->unsignedBigInteger('id_user');
            $table->string('image');
            $table->string('travel_name');
            $table->string('employee_name');
            $table->string('number_umroh');
            $table->string('number_haji');
            $table->string('address');
            $table->string('email');
            $table->string('is_verifition');
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
        Schema::dropIfExists('informasi_travels');
    }
};
