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
        Schema::create('wizards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('type');
            $table->foreignId('house_id')->constrained()->onDelete('cascade');
            $table->string('wand');
            $table->text('specialisation');
            $table->string('patronus');
            $table->text('title');
            $table->text('bio');
            $table->text('quote')->nullable();
            $table->string('image');
            $table->string('background_image');
            $table->string('theme_song')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wizards');
    }
};
