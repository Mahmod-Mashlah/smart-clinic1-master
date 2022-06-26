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
        Schema::create('treatment_procedures', function (Blueprint $table) {
            $table->foreignId('treatments_id')->references('id')->on('treatments')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('internal_procedures_id')->references('id')->on('internal_procedures')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('treatment_procedures');
    }
};
