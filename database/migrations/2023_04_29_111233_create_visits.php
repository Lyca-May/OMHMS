

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id('visits_id');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('user_id')->on('users')->onDelete('cascade');
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
