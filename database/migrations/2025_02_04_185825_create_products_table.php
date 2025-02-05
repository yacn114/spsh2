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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('view')->default(0);
            $table->decimal('price')->default(0);
            $table->decimal('discount')->default(0);
            $table->decimal('discount_percent')->default(0);
            $table->string('language')->default('fa');
            $table->string('description');
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->integer('student_count')->default(0);
            $table->enum('tutorial_level',['level1','level2','level3'])->default('level1');
            $table->text('result');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
