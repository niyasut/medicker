<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DoctorDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('doctors_id');
            $table->foreign('doctors_id')->references('id')->on('users');
            $table->string('degree');
            $table->string('specialization');
            $table->string('phone_number');
            $table->string('hospital');

        });
           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_details');
    }
}
