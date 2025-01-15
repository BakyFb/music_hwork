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
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category');
            $table->unsignedInteger('artist_id');
            $table->foreign('artist_id')->references('id')->on('artist');
            $table->unsignedInteger('album_id');
            $table->foreign('album_id')->references('id')->on('album')->nullable();
            $table->string('name');
            $table->string('audio')->nullable();
            $table->unsignedInteger('viewed')->default(o);
            $table->unsignedInteger('downloaded')->default(0);
            $table->unsignedInteger('favorites')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
