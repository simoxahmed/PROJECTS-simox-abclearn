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
        Schema::create('healt_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('healt_id')->constrained();
            $table->string('name');
            $table->string('photo');
            $table->string('chemin');
            $table->text('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healt_courses');
    }
};
