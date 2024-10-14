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
    { Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained()->onDelete('cascade'); // ربط المراجعة بالمنتج
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ربط المراجعة بالمستخدم
        $table->text('comment'); // نص المراجعة
        $table->integer('rating'); // تقييم المنتج (1-5)
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
