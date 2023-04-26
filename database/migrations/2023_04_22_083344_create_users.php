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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_fname');
            $table->string('user_mname');
            $table->string('user_lname');
            $table->string('user_country');
            $table->string('user_province');
            $table->string('user_municipality');
            $table->string('user_barangay');
            $table->string('user_street');
            $table->string('user_zipcode');
            $table->string('user_phonenum');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('account_status');
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
