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
        Schema::create('book_adates', function (Blueprint $table) {
            $table->id();
            $table->String('Day');
            $table->Date("Date");
            $table->Time('time');
            $table->foreignId('Doctor_id')->references('id')->on('doctors')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('Clinic_id')->references('id')->on('clinics')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('Patiant_id')->references('id')->on('patiants')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('book_adates');
    }
};
