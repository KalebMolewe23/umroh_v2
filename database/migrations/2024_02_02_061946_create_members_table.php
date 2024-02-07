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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_province');
            $table->unsignedBigInteger('id_regencies');
            $table->string('name_agen');
            $table->string('full_name');
            $table->string('ktp');
            $table->string('father_name');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('marital_status');
            $table->string('title');
            $table->string('gender');
            $table->string('citizenship');
            $table->string('address');
            $table->string('education');
            $table->string('work');
            $table->string('paspor_name');
            $table->string('number_paspor');
            $table->string('place_issue');
            $table->string('date_issue');
            $table->string('period');
            $table->string('companion_name');
            $table->string('relationship');
            $table->string('phone_agen');
            $table->string('email_agen');
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
        Schema::dropIfExists('members');
    }
};
