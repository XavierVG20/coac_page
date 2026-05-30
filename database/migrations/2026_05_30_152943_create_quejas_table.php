<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quejas', function (Blueprint $table) {
            $table->id();
            $table->boolean('anonimo')->default(false);

            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('dni')->nullable();

            $table->string('tipo');
            $table->string('agencia')->nullable();
            $table->string('asunto')->nullable();

            $table->longText('mensaje');

            $table->boolean('acepta_politica')->default(false);

            $table->ipAddress('ip')->nullable();

            $table->text('user_agent')->nullable();

            $table->timestamp('fecha_aceptacion')->nullable();

            $table->string('estado')->default('Pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quejas');
    }
};
