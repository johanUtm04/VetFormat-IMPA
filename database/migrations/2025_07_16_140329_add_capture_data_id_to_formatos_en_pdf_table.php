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
    Schema::table('formatos_en_pdf', function (Blueprint $table) {
        $table->unsignedBigInteger('capture_data_id')->nullable()->after('user_id');
        $table->foreign('capture_data_id')->references('id')->on('capture_datas')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('formatos_en_pdf', function (Blueprint $table) {
        $table->dropForeign(['capture_data_id']);
        $table->dropColumn('capture_data_id');
    });
}

};
