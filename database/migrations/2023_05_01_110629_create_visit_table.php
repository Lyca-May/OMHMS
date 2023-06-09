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
        Schema::create('visit', function (Blueprint $table) {
            $table->id('visits_id');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('visits_fname');
            $table->string('visits_mname');
            $table->string('visits_lname');
            $table->string('visits_email');
            $table->string('visits_country');
            $table->string('visits_province');
            $table->string('visits_municipality');
            $table->string('visits_brgy');
            $table->string('visits_street');
            $table->string('visits_zipcode');
            $table->string('contact_no');
            $table->date('visits_intended_date')->nullable();
            $table->time('visits_time')->nullable();
            $table->string('gender');
            $table->integer('visits_no_of_visitors')->nullable();
            $table->string('visits_name_of_institution')->nullable();
            $table->string('cancel_reason')->nullable();
            $table->string('visits_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
};
