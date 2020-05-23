<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInscritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 255);
            $table->string('email', 255);
            $table->string('telefone', 15)->nullable();
            $table->string('cpf', 14);
            $table->string('rg', 12)->nullable();
            $table->string('cep', 9);
            $table->string('rua', 255);
            $table->string('numero', 6);
            $table->string('complemento', 15)->nullable();
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('uf', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_inscritos');
    }
}
