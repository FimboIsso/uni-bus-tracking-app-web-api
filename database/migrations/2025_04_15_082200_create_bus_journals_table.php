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
        Schema::create('bus_journals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_id')->constrained()->onDelete('cascade');
            $table->foreignId('chauffeur_id')->constrained('users')->onDelete('cascade');
            $table->string('depart', 100);     // ex: "Campus Central"
            $table->string('destination', 100); // ex: "Faculté de Médecine"
            $table->enum('statut', ['en_route', 'terminé', 'annulé'])->default('en_route');
            $table->timestamp('heure_depart')->nullable();
            $table->timestamp('heure_arrivee')->nullable();
            $table->text('remarques')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_journals');
    }
};
