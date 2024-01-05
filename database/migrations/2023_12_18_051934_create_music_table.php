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
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('option5');
            $table->string('option6');
            $table->integer('answer_key');
            $table->string('youtube_link');
            $table->string('artist');
            $table->year('year_released');
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
