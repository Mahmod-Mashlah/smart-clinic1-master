<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_dates', function (Blueprint $table) {
            $table->id();
            $table->string('Day');
            $table->string('startHour');
            $table->string('EndHour');
            $table->date('Date');
            $table->foreignId('clinic_id')->references('id')->on('clinics')->cascadeOnDelete()->cascadeOnUpdate();



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

        Schema::dropIfExists('clinic_dates');
    }
};
