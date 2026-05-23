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
        Schema::create('contactos', function (Blueprint $table) {
     $table->string('nombre');
      $table->string('apellido');
       $table->string('dni');
    $table->string('email');
    $table->string('asunto')->nullable();
    $table->text('mensaje');
    $table->string('ip')->nullable();
$table->string('dispositivo')->nullable();
    $table->boolean('acepta_politica');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
