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
        Schema::create('formatosEnPdf', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_formato');   // Nombre del tipo de acta o reporte
            $table->string('archivo');          // Ruta o nombre del PDF guardado
            $table->timestamps();               // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formatos_en_pdf');
    }
};
