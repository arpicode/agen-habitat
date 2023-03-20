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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->uuid('no_inspection')->nullable();
            $table->dateTime('date_heure_rdv');
            $table->integer('releve_chauffage')->nullable();
            $table->integer('releve_eau_chaude')->nullable();
            $table->integer('releve_refroidissement')->nullable();
            $table->integer('releve_GES')->nullable();

            $table->foreignId('logement_id')->constrained('logements');
            $table->foreignId('tournee_id')->constrained('tournees')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
