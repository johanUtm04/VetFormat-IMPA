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
    Schema::table('capture_datas', function (Blueprint $table) {
        $table->unsignedBigInteger('formato_pdf_id')->nullable()->after('id');

        // Si existe una tabla de referencia
        $table->foreign('formato_pdf_id')->references('id')->on('formato_pdfs')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('capture_datas', function (Blueprint $table) {
        $table->dropForeign(['formato_pdf_id']);
        $table->dropColumn('formato_pdf_id');
    });
}

};
