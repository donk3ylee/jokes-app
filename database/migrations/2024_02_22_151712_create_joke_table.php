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
        Schema::create('jokes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('joke');
            $table->string('punchline')->nullable();
            $table->string('category')->default('general');
            $table->string('graphics')->nullable();
            $table->string('author_name');
            $table->string('author_link')->nullable();
            $table->string('author_photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joke');
    }
};
