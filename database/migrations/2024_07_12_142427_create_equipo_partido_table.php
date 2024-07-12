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
        Schema::create('equipo_partido', function (Blueprint $table) {
            $table->id();

            

            $table->unsignedBigInteger('equipo_id');
            $table->foreign('equipo_id')
            ->references('id')->on('equipos')
            ->onDelete('cascade');

            $table->unsignedBigInteger('partido_id');
            $table->foreign('partido_id')
            ->references('id')->on('partidos')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipo_partido');
    }
};
