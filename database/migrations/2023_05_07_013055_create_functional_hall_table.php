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
        Schema::create('functional_hall', function (Blueprint $table) {
            $table->id('functional_id');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('functional_fname');
            $table->string('functional_mname');
            $table->string('functional_lname');
            $table->string('functional_email');
            $table->string('functional_country');
            $table->string('functional_province');
            $table->string('functional_municipality');
            $table->string('functional_brgy');
            $table->string('functional_street');
            $table->string('functional_zipcode');
            $table->string('functional_contactno');
            $table->date('functional_intended_date');
            $table->time('functional_time');
            $table->string('functional_gender');
            $table->integer('functional_no_of_participants');
            $table->string('functional_name_of_institution');
            $table->string('functional_event_name');
            $table->string('functional_cancel_reason')->nullable();
            $table->string('reference');
            $table->string('functional_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('functional_hall');
    }
};
