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
        Schema::create('inventory_artifacts', function (Blueprint $table) {
            $table->id('artifact_id');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('category')->onDelete('cascade');
            $table->string('artifact_name');
            $table->text('artifact_description');
            $table->integer('quantity');
            $table->string('artifact_category');
            $table->string('artifact_image');
            $table->boolean('is_archived')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_artifacts');
    }
};
