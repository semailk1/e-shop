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
            $table->foreignId('category_id')
                ->constrained('categories')
                ->references('id')
                ->cascadeOnDelete();
            $table->foreignId('brand_id')
                ->constrained('brands')
                ->references('id')
                ->cascadeOnDelete();

            $table->bigInteger('article')->unique();
            $table->string('title');
            $table->text('description');
            $table->json('images');
            $table->double('purchase_price');
            $table->double('quantity');
            $table->double('price');
            $table->double('discount')->default(0);
            $table->float('rating')->default(0);
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
