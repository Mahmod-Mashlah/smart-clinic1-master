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
        Schema::create('treatment_examinations', function (Blueprint $table) {
            $table->foreignId('examinations_id')->references('id')->on('examinations')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('treatment_id')->references('id')->on('treatments')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('treatment_examinations');
    }
};
