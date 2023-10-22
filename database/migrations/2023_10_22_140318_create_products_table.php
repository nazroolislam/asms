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
            $table->unsignedInteger('category_id');
            $table->string('title', 128)->unique();
            $table->string('slug', 156)->unique();
            $table->longText('description');
            $table->tinyInteger('in_stock')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->decimal('price', 8, 2);
            $table->decimal('sale_price', 8, 2);
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
