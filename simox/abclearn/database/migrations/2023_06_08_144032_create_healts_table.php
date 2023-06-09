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
        Schema::create('healts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('abclearn_id')->constrained();
            $table->string('name');
            $table->string('type');
            $table->string('photo');
            $table->string('chemin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healts');
    }
};
