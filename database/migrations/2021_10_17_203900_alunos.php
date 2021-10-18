<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('escola_id', 8);
            $table->year('periodo');
            $table->string('codigo_aluno', 20)->index();
            $table->string('matricula_municipal', 20)->index();
            $table->string('inep_aluno', 12)->nullable();
            $table->string('nome', 100);
            $table->foreignId('turno_id')->references('id')->on('turnos');
            $table->foreignId('etapa_id')->references('id')->on('etapas');
            $table->date('data_nascimento');
            $table->tinyInteger('sexo');
            $table->tinyInteger('etnia');
            $table->string('altura', 5)->nullable();
            $table->string('peso', 5)->nullable();
            $table->tinyInteger('nacionalidade');
            $table->foreignId('pais_nascimento_id')->references('id')->on('paises');
            $table->foreignId('estado_nascimento_id')->nullable()->references('id')->on('estados');
            $table->foreignId('cidade_nascimento_id')->references('id')->on('cidades');
            // $table->integer('filiacao_id')->reference('id')->on('parents');
            // $table->deficiencias
            $table->string('rg')->nullable();
            $table->string('nis', 11)->nullable();
            $table->string('cpf')->nullable();
            $table->string('certidao_nascimento');
            $table->string('endereco', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 30)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('ponto_referencia', 100)->nullable();
            $table->foreignId('pais_residencia_id')->references('id')->on('paises');
            $table->foreignId('estado_residencia_id')->nullable()->references('id')->on('estados');
            $table->foreignId('cidade_residencia_id')->nullable()->references('id')->on('cidades');
            $table->string('cep', 8)->nullable();
            $table->tinyInteger('localizacao');
            $table->tinyInteger('localizacao_diferenciada');
            $table->tinyInteger('bolsa_familia')->default(0);
            $table->tinyInteger('tarifa_social')->default(0);
            $table->tinyInteger('acesso_internet')->default(0);
            $table->char('tipo_internet', 2)->nullable();
            $table->tinyInteger('direitos_imagem')->default(0);
            $table->string('nome_pessoa_autorizada', 100)->nullable();
            $table->string('telefone_pessoa_autorizada', 15)->nullable();
            $table->string('cpf_pessoa_autorizada', 11)->nullable();
            $table->string('possuiu_doencas')->nullable();
            $table->string('outras_doencas')->nullable();
            // foto
            $table->timestamps();
            
            $table->foreign('escola_id')->references('codigo_escola')->on('escolas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
