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
        //
        Schema::table('alertas', function (Blueprint $table){
            $table->foreignId('conta_id')
                ->constrained('contas')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('alertas', function (Blueprint $table){
            $table->dropForeign('conta_id');
        });
    }
};
