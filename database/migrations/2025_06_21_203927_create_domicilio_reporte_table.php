<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
        // $domicilio->domicilio = $request->dom_domicilio;
        // $domicilio->colonia = $request->dom_colonia;
        // $domicilio->cp = $request->dom_cp;
        // $domicilio->estado = $request->dom_estado;
        // $domicilio->ciudad = $request->dom_ciudad;
        // $domicilio->telefono = $request->dom_telefono;
        // $domicilio->entre_calles = $request->dom_entre_calles;
        // $domicilio->referencias = $request->dom_referencias;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('domicilio_reporte', function (Blueprint $table) {
            $table->id();
            $table->string('Domicilio')->nullable();
            $table->string('Colonia')->nullable();
            $table->string('CP')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Ciudad')->nullable();
            $table->string('Telefono')->nullable();
            $table->string('Entre_calles')->nullable();
            $table->string('Referencias')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domicilio_reporte');
    }
};
