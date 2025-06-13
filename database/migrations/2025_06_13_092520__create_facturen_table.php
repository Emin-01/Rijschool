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
        Schema::create('facturen', function (Blueprint $table) {
        $table->id();
        $table->foreignId('inschrijving_id')->constrained('inschrijvingen');
        $table->string('factuurnummer')->unique();
        $table->date('factuurdatum');
        $table->decimal('bedrag_exc_btw', 10, 2);
        $table->decimal('btw', 10, 2);
        $table->decimal('bedrag_inc_btw', 10, 2);
        $table->string('factuurstatus');
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
        Schema::dropIfExists('facturen');
    }
};
