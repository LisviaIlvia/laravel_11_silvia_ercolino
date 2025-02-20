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
        Schema::table('products', function (Blueprint $table) {
            // Qui creo la colonna
            $table->unsignedBigInteger('user_id')->nullable()->after('price'); // definisce una colonna con all'interno un tipo di dato intero molto grande senza segno (solo numeri positivi)
            // Qui specifico che tipo di dato conterrà
            // CREO UN VINCOLO REFERENZIALE
            $table->foreign('user_id')->references('id')->on('users'); // questi metodi definiscono la FK della tabella products collegata alla tabella users tramite i loro id specifici

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

            // PRIMA ROMPO IL VINCOLO REFERENZIALE
            $table->dropForeign(['user_id']);
            // adesso posso eliminare la colonna
            $table->dropColumn('user_id');
        });
    }
};
