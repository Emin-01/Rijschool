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
        Schema::create('rijles_ophaaladressen', function (Blueprint $table) {
        $table->id();
        $table->foreignId('rijles_id')->constrained('rijlessen');
        $table->foreignId('ophaaladres_id')->constrained('ophaaladressen');
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
        Schema::dropIfExists('rijles_ophaaladressen');
    }
};
