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
        Schema::create('contacten', function (Blueprint $table) {
        $table->id();
        $table->foreignId('gebruiker_id')->constrained('gebruikers');
        $table->string('straatnaam');
        $table->string('huisnummer');
        $table->string('toevoeging')->nullable();
        $table->string('postcode');
        $table->string('plaats');
        $table->string('mobiel');
        $table->string('email')->unique();
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
        Schema::dropIfExists('contacten');
    }
};
