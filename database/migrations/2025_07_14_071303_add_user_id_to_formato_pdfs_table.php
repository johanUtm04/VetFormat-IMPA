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
        Schema::table('formatosEnPdf', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable()->after('nombre_formato');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('formato_pdfs', function (Blueprint $table) {
            //
        });
    }
};
