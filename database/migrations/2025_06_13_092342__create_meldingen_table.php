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
    Schema::create('meldingen', function (Blueprint $table) {
        $table->id();
        $table->foreignId('gebruiker_id')->constrained('gebruikers');
        $table->enum('doelgroep', ['Leerling', 'Instructeur', 'Beide']);
        $table->text('bericht');
        $table->enum('soort_melding', ['Ziek', 'Leswijziging', 'Lesannulering', 'LesOphaaladreswijziging', 'Lesdoelwijziging']);
        $table->date('datum');
        $table->boolean('is_actief')->default(true);
        $table->text('opmerking')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meldingen');
    }
};