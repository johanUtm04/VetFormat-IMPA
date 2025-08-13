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
        Schema::create('reporte', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_per_at');
            $table->unsignedBigInteger('id_reportante');
            $table->unsignedBigInteger('id_det_rep');
            $table->unsignedBigInteger('id_dom_rep');
            $table->unsignedBigInteger('id_at_rep');
            $table->date('Fecha')->nullable();
            $table->string('Recibio')->nullable();
            $table->string('Envio_Evidencia')->nullable();
            $table->string('Seguimiento')->nullable();
            $table->unsignedBigInteger('user_id');

            //Llaves foraneas 
            $table->foreign('id_per_at')->references('id')->on('personal_atiende')->onDelete('cascade');
            $table->foreign('id_reportante')->references('id')->on('reportante')->onDelete('cascade');
            $table->foreign('id_det_rep')->references('id')->on('detalle_reporte')->onDelete('cascade');
            $table->foreign('id_dom_rep')->references('id')->on('domicilio_reporte')->onDelete('cascade');
            $table->foreign('id_at_rep')->references('id')->on('at_reporte')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reporte');
    }
};
