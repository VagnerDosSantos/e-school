<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class School extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Escola
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_inep', 8);
            $table->tinyInteger('status', 1);
            $table->date('data_inicio');
            $table->date('data_final');
            $table->string('nome', 100);
            $table->string('cep', 8);
            $table->string('cidade_id');
            $table->string('distrito_id');
            $table->string('endereco', 100);
            $table->string('numero', 10);
            $table->string('complemento', 20);
            $table->string('bairro', 50);
            $table->string('telefone', 11);
            $table->string('telefone_2', 11);
            $table->string('email', 50);
            $table->string('codigo_regional', 5);
            $table->tinyInteger('localizacao', 1);
            $table->tinyInteger('localizacao_diferenciada', 1);
            $table->tinyInteger('dependencia_administrativa', 1);
            $table->string('vinculo_escolar');
            $table->string('escola_privada_mantenedora')->nullable();
            $table->string('escola_privada_categoria')->nullable();
            $table->string('escola_privada_convenio_publico', 1)->nullable();
            $table->string('escola_privada_mantenedora_cnpj', 14)->nullable();
            $table->string('escola_privada_cnpj', 14)->nullable();
            $table->string('regulamentacao_conselho', 1);
            $table->string('esfera_administrativa');
            $table->string('unidade_vinculada', 1);
            $table->string('codigo_escola_sede', 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
