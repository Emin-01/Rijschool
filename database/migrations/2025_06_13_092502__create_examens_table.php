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
        Schema::create('examens', function (Blueprint $table) {
        $table->id();
        $table->foreignId('inschrijving_id')->constrained('inschrijvingen');
        $table->foreignId('instructeur_id')->constrained('instructeurs');
        $table->date('begindatum');
        $table->time('begintijd');
        $table->date('einddatum');
        $table->time('eindtijd');
        $table->string('locatie');
        $table->enum('resultaat', ['Geslaagd', 'Gezakt']);
        $table->boolean('is_actief')->default(true);
        $table->text('commentaar')->nullable();
        $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
