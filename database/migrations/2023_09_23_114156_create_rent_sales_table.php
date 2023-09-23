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
        Schema::create('rent_sales', function (Blueprint $table) {
            $table->id('rent_sale_id');
            $table->unsignedBigInteger('rent_id'); // Foreign key referencing the rent_hall table
            $table->unsignedBigInteger('userid'); // Foreign key referencing the users table
            $table->decimal('total_amount', 10, 2); // Total amount of the sale
            $table->date('sale_date'); // Date of the sale
            $table->string('status', 255);
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('rent_id')->references('rent_id')->on('rent_hall');
            $table->foreign('userid')->references('user_id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_sales');
    }
};
