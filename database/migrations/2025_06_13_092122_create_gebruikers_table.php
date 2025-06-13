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
        Schema::create('gebruikers', function (Blueprint $table) {
        $table->id();
        $table->string('voornaam');
        $table->string('tussenvoegsel')->nullable();
        $table->string('achternaam');
        $table->date('geboortedatum');
        $table->string('gebruikersnaam')->unique();
        $table->string('wachtwoord');
        $table->boolean('is_ingelogd')->default(false);
        $table->datetime('ingelogd')->nullable();
        $table->datetime('uitgelogd')->nullable();
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
        Schema::dropIfExists('gebruikers');
    }
};
