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
        Schema::create('inschrijvingen', function (Blueprint $table) {
        $table->id();
        $table->foreignId('leerling_id')->constrained('leerlingen');
        $table->foreignId('pakket_id')->constrained('pakketten');
        $table->date('begindatum');
        $table->date('einddatum')->nullable();
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
        Schema::dropIfExists('inschrijvingen');
    }
};
