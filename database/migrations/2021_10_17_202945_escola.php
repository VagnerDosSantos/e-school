<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Escola extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_escola', 8)->index()->onDelete('cascade');
            $table->tinyInteger('situacao');
            $table->date('data_inicio');
            $table->date('data_final');
            $table->string('nome', 100);
            $table->string('ato_criacao')->nullable();
            $table->string('cep', 8);
            $table->foreignId('estado_id')->references('id')->on('estados');
            $table->foreignId('cidade_id')->references('id')->on('cidades');
            $table->foreignId('distrito_id')->references('id')->on('distritos');
            $table->string('endereco', 100);
            $table->string('numero', 10);
            $table->string('complemento', 20);
            $table->string('bairro', 50);
            $table->string('telefone', 20);
            $table->string('telefone_2', 20);
            $table->string('email', 50);
            $table->string('codigo_regional', 5);
            $table->tinyInteger('localizacao');
            $table->tinyInteger('localizacao_diferenciada');
            $table->tinyInteger('dependencia_administrativa');
            $table->string('vinculo_escolar');
            $table->string('escola_privada_mantenedora')->nullable();
            $table->string('escola_privada_categoria')->nullable();
            $table->string('escola_privada_convenio_publico', 1)->nullable();
            $table->string('escola_privada_mantenedora_cnpj', 14)->nullable();
            $table->string('cnpj', 14)->nullable();
            $table->string('regulamentacao_conselho', 1);
            $table->string('esfera_administrativa');
            $table->string('unidade_vinculada', 1);
            $table->string('codigo_escola_sede', 8)->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('escolas');
    }
}
