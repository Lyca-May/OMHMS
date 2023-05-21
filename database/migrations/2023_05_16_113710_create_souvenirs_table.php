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
        Schema::create('souvenirs', function (Blueprint $table) {
            $table->id('souvenir_id');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('category')->onDelete('cascade');
            $table->string('souvenir_name');
            $table->string('souvenir_description');
            $table->integer('souvenir_qty');
            $table->float('souvenir_price');
            $table->string('souvenir_municipality');
            $table->string('souvenir_image');
            $table->string('souvenir_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('souvenirs');
    }
};
