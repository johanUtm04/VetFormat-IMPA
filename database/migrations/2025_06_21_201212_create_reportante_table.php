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
        Schema::create('reportante', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres');
            $table->string('A_Paterno');
            $table->string('A_Materno')->nullable();
            $table->string('Domicilio')->nullable();
            $table->string('Colonia')->nullable();
            $table->string('CP')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Ciudad_Localidad')->nullable();
            $table->string('Telefono')->nullable();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportante');
    }
};
