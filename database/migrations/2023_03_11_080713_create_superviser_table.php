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
        Schema::create('superviser', function (Blueprint $table) {
            $table->primary(['employe_id', 'logement_id']);

            $table->foreignId('employe_id')->constrained('employes');
            $table->foreignId('logement_id')->constrained('logements');

            $table->index(['employe_id', 'logement_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superviser');
    }
};
