<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_user');
            $table->string('title');
            $table->string('thumbnail');
            $table->string('short_desc');
            $table->string('long_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_contents');
    }
};
