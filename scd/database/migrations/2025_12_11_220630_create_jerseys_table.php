<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jerseys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('team')->nullable();
            $table->string('sport')->default('cricket');
            $table->string('size'); // S, M, L, XL, etc.
            $table->string('color');
            $table->decimal('price', 10, 2);
            $table->text('image_url'); // URL for the jersey image
            $table->text('description')->nullable();
            $table->boolean('in_stock')->default(true);
            $table->integer('stock_quantity')->default(0);
            $table->string('material')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jerseys');
    }
};