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
        Schema::create('comunidad_contacto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comunidad_id');
            $table->unsignedBigInteger('contacto_id');
            
            $table->foreign('comunidad_id')->references('id')->on('comunidades')->onDelete('cascade');
            $table->foreign('contacto_id')->references('id')->on('contactos')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunidad_contacto');
    }
};
