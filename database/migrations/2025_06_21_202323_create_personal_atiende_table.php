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
        Schema::create('personal_atiende', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nombres');
            $table->string('A_Paterno');
            $table->string('A_Materno')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_atiende');
    }
};
