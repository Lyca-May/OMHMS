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
        Schema::create('members_visit', function (Blueprint $table) {
            $table->id('members_id');
            $table->unsignedBigInteger('visit_id');
            $table->foreign('visit_id')->references('visits_id')->on('visit')->onDelete('cascade');
            $table->string('members_fname');
            $table->string('members_mname');
            $table->string('members_lname');
            $table->string('members_age');
            $table->string('members_gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_visit');
    }
};
