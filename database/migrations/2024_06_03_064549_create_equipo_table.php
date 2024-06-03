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
        Schema::create('equipo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Cliente');
            $table->unsignedBigInteger('id_Servicio');
            $table->unsignedBigInteger('id_Marca');
            $table->string('Descripcion');
            $table->timestamps();

            // Definición de las llaves foráneas
            $table->foreign('id_Cliente')->references('id')->on('cliente')->onDelete('cascade');
            $table->foreign('id_Servicio')->references('id')->on('servicio')->onDelete('cascade');
            $table->foreign('id_Marca')->references('id')->on('marca')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipo', function (Blueprint $table) {
            // Eliminar las llaves foráneas antes de eliminar la tabla
            $table->dropForeign(['id_Cliente']);
            $table->dropForeign(['id_Servicio']);
            $table->dropForeign(['id_Marca']);
        });

        Schema::dropIfExists('equipo');
    }
};
