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
        Schema::create('servicio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('id_Tecnico');
            $table->string('Descripcion');
            $table->string('Estado');
            $table->dateTime('Fecha_Ingreso');
            $table->timestamps();

            // Definición de la llave foránea
            $table->foreign('id_Tecnico')->references('id')->on('tecnico')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicio', function (Blueprint $table) {
            // Eliminar la llave foránea antes de eliminar la tabla
            $table->dropForeign(['id_Tecnico']);
        });

        Schema::dropIfExists('servicio');
    }
};
