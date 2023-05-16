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
        Schema::create('rent_function_hall', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('contact_person');
            $table->string('contact_number');
            $table->string('agency');
            $table->date('date_requested');
            $table->time('event_start');
            $table->string('event_type');
            $table->time('prep_setup_time');
            $table->date('date_of_setup');
            $table->string('others');
            $table->boolean('sound_system')->default(false);
            $table->boolean('led_tv')->default(false);
            $table->boolean('microphones')->default(false);
            $table->string('number_of_microphones');
            $table->boolean('tables')->default(false);
            $table->string('number_of_tables');
            $table->boolean('chairs')->default(false);
            $table->string('number_of_chairs');
            $table->string('status');
            $table->string('recorded_by')->nullable();
            // $table->date('recorded_date')->nullable();
            $table->string('approved_by')->nullable();
            $table->string('downpayment')->nullable();
            $table->string('add_service_payment')->nullable();
            $table->string('others_payment')->nullable();
            $table->string('total_payment')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_function_hall');
    }
};
