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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cidade_id')->constrained('cidades');
            $table->string('titulo');
            $table->text('descricao');
            $table->text('requisitos')->nullable();
            $table->decimal('salario', 10, 2)->nullable();
            $table->date('data_postagem')->default(now());
            $table->date('prazo_candidatura')->nullable();
            $table->enum('status', ['aberta', 'fechada'])->default('aberta');
            $table->integer('total_cliques')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
