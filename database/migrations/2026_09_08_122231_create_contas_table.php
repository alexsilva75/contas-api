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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->text('descricao')->nullable();
            $table->timestamp('data_vencimento');
            $table->timestamp('data_lancamento')->useCurrent();
            $table->timestamp('data_pagamento')->nullable();
            $table->string('nivel_prioridade', 10);
            $table->foreignId('tipo_conta_id')->references('id')->on('tipo_contas');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas');
    }
};
