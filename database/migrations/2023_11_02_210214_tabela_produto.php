<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaProduto extends Migration
{
    /**
     * Migração do sistema para o banco de dados
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('validade');
            $table->string('codigo_de_barra')->unique();
            $table->integer('estoque');
            $table->timestamps();
        });
    }

    /**
     * apagando a tabela caso ocorre rollback
     *
     * @return void
     */
    public function down()
    {
         // Apaga a tabela caso ocorra rollback
         Schema::dropIfExists('produtos');
    }
}
