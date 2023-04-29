

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
            $table->date('visits_intended_date');
            $table->time('visits_time');
            $table->date('visits_birthdate');
            $table->integer('visits_contactno');
            $table->integer('visits_no_of_visitors');
            $table->string('visits_name_of_institution');
            $table->string('visits_status');
            $table->string('role');
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
