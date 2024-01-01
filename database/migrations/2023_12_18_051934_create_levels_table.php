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
            $table->timestamps();
            $table->string('challenge_type');
            $table->string('title');
            $table->string('genre');
            $table->string('lyric');
            // $table->integer('audio');
            $table->string('youtube_link');
            $table->string('artist');
            $table->date('year_released');
            $table->integer('guess_duration');
            $table->boolean('status');
            $table->integer('point');
            $table->string('image');
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
