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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone_no');
            $table->string('address');
            $table->string('item_name');
            $table->string('price');
            $table->string('quantity');
            $table->string('image');
            $table->foreignId('user_id')->constrained('users')->noActionOnDelete();
            $table->foreignId('item_id')->constrained('items')->noActionOnDelete();
            $table->foreignId('event_id')->constrained('events')->noActionOnDelete();
            $table->string('USSID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
