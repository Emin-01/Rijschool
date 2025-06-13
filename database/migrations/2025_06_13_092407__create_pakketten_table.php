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
        Schema::create('pakketten', function (Blueprint $table) {
        $table->id();
        $table->enum('soort', ['Pakket1', 'Pakket2', 'Pakket3']);
        $table->integer('aantal_lessen');
        $table->decimal('prijs_per_les', 8, 2);
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
        Schema::dropIfExists('pakketten');
    }
};
