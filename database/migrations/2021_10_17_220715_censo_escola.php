<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CensoEscola extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censo_escola', function (Blueprint $table) {
            $table->id();
            $table->string('escola_id', 8);
            $table->year('periodo');
            $table->string('local_funcionamento');
            $table->string('codigo_escola_compartilha')->nullable();
            $table->tinyInteger('fornece_agua');
            $table->string('abastecimento_agua');
            $table->string('fonte_energia');
            $table->string('esgotamento_sanitario');
            $table->string('destino_lixo');
            $table->string('tratamento_lixo');
            $table->string('dependencias_fisicas');
            $table->string('recursos_acessibilidade');
            $table->string('salas_dentro_predio', 4)->nullable();
            $table->string('salas_fora_predio', 4)->nullable();
            $table->string('salas_climatizadas', 4)->nullable();
            $table->string('salas_acesssiveis', 4)->nullable();
            $table->string('equipamentos_adminstrativo')->nullable();
            $table->string('dvd', 4)->nullable();
            $table->string('som', 4)->nullable();
            $table->string('televisao', 4)->nullable();
            $table->string('lousa_digital', 4)->nullable();
            $table->string('datashow', 4)->nullable();
            $table->string('computadores_mesa_alunos', 4)->nullable();
            $table->string('computadores_portateis_alunos', 4)->nullable();
            $table->string('tablets_alunos', 4)->nullable();
            $table->string('acesso_internet')->nullable();
            $table->string('equipamentos_alunos_internet')->nullable();
            $table->string('rede_local')->nullable();
            $table->string('auxiliar_secretaria', 4)->nullable();
            $table->string('servicos_gerais', 4)->nullable();
            $table->string('bibliotecario', 4)->nullable();
            $table->string('bombeiro', 4)->nullable();
            $table->string('coordenador_turno_disciplinar', 4)->nullable();
            $table->string('fonoaudiologo', 4)->nullable();
            $table->string('nutricionista', 4)->nullable();
            $table->string('psicologo', 4)->nullable();
            $table->string('cozinheiro', 4)->nullable();
            $table->string('supervisor_pedagogico', 4)->nullable();
            $table->string('secretario_escolar', 4)->nullable();
            $table->string('monitores', 4)->nullable();
            $table->string('vice_diretor_adjunto', 4)->nullable();
            $table->string('orientador_comunitario', 4)->nullable();
            $table->tinyInteger('merenda_escolar');
            $table->string('organizacao_ensino')->nullable();
            $table->string('instrumentos_socioculturais');
            $table->tinyInteger('educacao_indigena');
            $table->string('lingua_indigena', 1)->nullable();
            $table->string('lingua_portuguesa', 1)->nullable();
            $table->unsignedBigInteger('cod_indigena1')->nullable();
            $table->unsignedBigInteger('cod_indigena2')->nullable();
            $table->unsignedBigInteger('cod_indigena3')->nullable();
            $table->tinyInteger('exame_selecao');
            $table->string('reserva_vagas')->nullable();
            $table->tinyInteger('possui_site');
            $table->tinyInteger('compartilha_espaco');
            $table->tinyInteger('utiliza_espacos_atividades');
            $table->string('orgaos_colegiados');
            $table->tinyInteger('ppp');
            
            $table->foreign('escola_id')->references('codigo_escola')->on('escolas');
            $table->foreign('cod_indigena1')->references('id')->on('linguas_indigenas');
            $table->foreign('cod_indigena2')->references('id')->on('linguas_indigenas');
            $table->foreign('cod_indigena3')->references('id')->on('linguas_indigenas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('censo_escola');
    }
}
