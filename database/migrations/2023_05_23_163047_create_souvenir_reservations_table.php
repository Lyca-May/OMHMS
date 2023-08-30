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
        Schema::create('souvenir_reservations', function (Blueprint $table) {
            $table->id('souvenir_reservations_id');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('souvenir_id');
            $table->foreign('souvenir_id')->references('souvenir_id')->on('souvenir')->onDelete('cascade');
            $table->integer('quantity');
            $table->double('total_price');
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('souvenir_reservations');
    }
};
