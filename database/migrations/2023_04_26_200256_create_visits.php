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
        Schema::create('visits', function (Blueprint $table) {
            $table->id('visits_id');
            $table->string('visits_fname');
            $table->string('visits_mname');
            $table->string('visits_lname');
            $table->string('visits_country');
            $table->string('visits_province');
            $table->string('visits_municipality');
            $table->string('visits_brgy');
            $table->string('visits_street');
            $table->string('visits_zipcode');
            $table->string('visits_intended_date');
            $table->string('visits_time');
            $table->string('visits_birthdate');
            $table->string('visits_contactno');
            $table->string('visits_no_of_visitors');
            $table->string('visits_name_of_institution');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
