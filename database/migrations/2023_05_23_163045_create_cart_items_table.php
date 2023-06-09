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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id('cart_item_id');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('souvenir_id');
            $table->foreign('souvenir_id')->references('souvenir_id')->on('souvenirs')->onDelete('cascade');
            $table->integer('quantity');
            $table->boolean('is_archived')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
