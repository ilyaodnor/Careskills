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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->enum('gender', ['Male', 'Female']);
            $table->integer('age');
            $table->foreignId('diagnosis_id')->constrained('diagnoses')->onDelete('cascade');
            $table->text('medical_history');
            $table->text('symptoms');
            $table->float('weight');
            $table->float('height');
            $table->text('allergies')->nullable();
            $table->text('chronic_conditions')->nullable();
            $table->text('current_medications')->nullable();
            $table->boolean('smoker')->default(false);
            $table->boolean('alcohol_use')->default(false);
            $table->string('blood_pressure');
            $table->integer('pulse');
            $table->float('temperature_c');
            $table->integer('oxygen_saturation');
            $table->integer('pain')->nullable();
            $table->string('avatar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
