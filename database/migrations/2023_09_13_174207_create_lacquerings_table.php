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
        Schema::create('lacquerings', function (Blueprint $table) {
            $table->id();

            //chaves estrangeira
            $table->foreignId('client_id')->constrained()->restrictOnDelete();
            $table->foreignId('film_id')->constrained()->restrictOnDelete();

            $table->dateTime('data_inicio');
            $table->dateTime('data_devolucao');
            $table->decimal('valor', 6, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lacquerings');
    }
};
