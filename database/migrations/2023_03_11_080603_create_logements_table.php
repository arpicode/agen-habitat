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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('adresse', 128);
            $table->string('no_appt', 10);
            $table->string('type', 10);
            $table->year('annee_construction');
            $table->integer('surface_habitable');
            $table->date('debut_periode_inspection');
            $table->date('fin_periode_inspection');

            $table->foreignId('locataire_id')->constrained('locataires');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logements');
    }
};
