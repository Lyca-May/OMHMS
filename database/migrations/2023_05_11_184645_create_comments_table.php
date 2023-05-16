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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comments_id');
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('feed_id');
            $table->text('comment_text');
            $table->timestamps();

            // add foreign key constraints to user_id and feed_id columns
            $table->foreign('userid')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('feed_id')->references('feed_id')->on('newsfeed')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
