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
        Schema::create('agencias', function (Blueprint $table) {
            $table->id();
             // Información principal
    $table->string('nombre');
    $table->string('slug')->unique();
    $table->string('ciudad');
    $table->string('direccion');
    $table->string('telefono')->nullable();
    $table->string('correo')->nullable();
    $table->string('horario')->nullable();

    // Estadísticas
    $table->integer('socios')->default(0);
    $table->integer('creditos')->default(0);

    // Imagen
    $table->string('imagen')->nullable();

    // Google Maps
    $table->text('mapa_google')->nullable();

    // SEO
    $table->string('meta_title')->nullable();
    $table->text('meta_description')->nullable();
    $table->string('meta_keywords')->nullable();

    // Estado
    $table->boolean('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencias');
    }
};
