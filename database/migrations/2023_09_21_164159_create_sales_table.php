<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('sale_id');
            $table->unsignedBigInteger('souvenirReservations_id');
            $table->unsignedBigInteger('userid');
            $table->date('sale_date');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->string('status', 255);
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('souvenirReservations_id')->references('souvenir_reservations_id')->on('souvenir_reservations');
            $table->foreign('userid')->references('user_id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
