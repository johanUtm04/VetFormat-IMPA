<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('capture_datas', function (Blueprint $table) {
        $table->id();

        $table->string('per_nombres');
        $table->string('per_apaterno');
        $table->string('per_amaterno');

        $table->string('rep_nombres');
        $table->string('rep_apaterno');
        $table->string('rep_amaterno');
        $table->string('rep_domicilio');
        $table->string('rep_colonia');
        $table->string('rep_cp');
        $table->string('rep_estado');
        $table->string('rep_ciudad');
        $table->string('rep_telefono');

        $table->text('det_medio');
        $table->text('det_asunto');
        $table->text('det_motivo');

        $table->string('dom_domicilio');
        $table->string('dom_colonia');
        $table->string('dom_cp');
        $table->string('dom_estado');
        $table->string('dom_ciudad');
        $table->string('dom_telefono');
        $table->text('dom_entre_calles');
        $table->text('dom_referencias');

        $table->date('at_fecha');
        $table->time('at_hora_atencion');
        $table->string('at_nom_ciudadano');
        $table->text('at_observaciones');

        $table->date('rep_fecha');
        $table->string('rep_recibio');
        $table->text('rep_envio_evidencia');
        $table->text('rep_seguimiento');

        $table->string('direccion');
        $table->decimal('latitude', 10, 7)->nullable();
        $table->decimal('longitude', 10, 7)->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
public function down()
{
    Schema::dropIfExists('capture_datas');
}

};
