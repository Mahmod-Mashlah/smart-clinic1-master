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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->references('id')->on('clinics')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('doctor_id')->references('id')->on('doctors')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('patiant_id')->references('id')->on('patiants')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('treatments_id')->references('id')->on('treatments')->cascadeOnDelete()->cascadeOnUpdate();

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
};
