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
            $table->string('image');
            $table->integer('discount');
            $table->integer('bought_count');
            $table->longText('long_description');
            $table->text('short_description');
            $table->foreignId('color_id')->constrained()->onDelete('CASCADE');
            $table->integer('hot_price');
            $table->foreignId('view_id')->constrained()->onDelete('CASCADE');
            $table->json("information_json");
            $table->integer("count_product");
            $table->integer("Warranty");
            $table->foreignId("category_id")->constrained()->onDelete('CASCADE');

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
