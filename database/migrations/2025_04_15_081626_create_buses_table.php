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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation', 30)->unique(); // Exemple: "ABC-1234"
            $table->string('marque',70)->nullable();            // Marque du bus
            $table->string('modele',70)->nullable();            // Modèle
            $table->string('couleur',70)->nullable();           // Couleur (facultatif)
            $table->enum('status', ['en_attente', 'en_route', 'hors_service'])->default('en_attente');
            $table->foreignId('chauffeur_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
