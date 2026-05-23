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
        Schema::create('noticias', function (Blueprint $table) {
             $table->id();
    $table->string('titulo');
    $table->string('slug')->unique();
    $table->longText('descripcion');

    $table->string('imagen');

    $table->foreignId('categoria_id')->constrained()->onDelete('cascade');

    // SEO
      $table->string('meta_title')->nullable();
    $table->text('meta_description')->nullable();
    $table->string('meta_keywords')->nullable();
    
    $table->boolean('activo')->default(true);

    $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
