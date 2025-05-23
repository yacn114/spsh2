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
        Schema::create('movings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('sender_id')->nullable();
            $table->foreign('sender_id')->references('id')->on('users');
            $table->unsignedInteger('receiving_id')->nullable();
            $table->foreign('receiving_id')->references('id')->on('users');
            $table->integer('amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movings');
    }
};
