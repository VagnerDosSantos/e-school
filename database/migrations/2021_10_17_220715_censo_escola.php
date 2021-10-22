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
        Schema::create('censo_escolas', function (Blueprint $table) {
            $table->id();
            $table->string('escola_id', 8);
            $table->year('periodo');
            $table->tinyInteger('situacao');
            $table->date('data_inicio');
            $table->date('data_final');
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
            $table->string('local_funcionamento'); // Array
            $table->tinyInteger('forma_ocupacao');
            $table->string('codigo_escola_compartilha')->nullable();
            $table->tinyInteger('fornece_agua');
            $table->string('abastecimento_agua'); // Array
            $table->string('fonte_energia'); // Array
            $table->string('esgotamento_sanitario'); // Array
            $table->string('destino_lixo'); // Array
            $table->string('tratamento_lixo'); // Array
            $table->string('dependencias_fisicas'); // Array
            $table->string('recursos_acessibilidade'); // Array
            $table->string('salas_dentro_predio', 4)->nullable();
            $table->string('salas_fora_predio', 4)->nullable();
            $table->string('salas_climatizadas', 4)->nullable();
            $table->string('salas_acesssiveis', 4)->nullable();
            $table->string('equipamentos_adminstrativo')->nullable(); // Array
            $table->string('dvd', 4)->nullable();
            $table->string('som', 4)->nullable();
            $table->string('televisao', 4)->nullable();
            $table->string('lousa_digital', 4)->nullable();
            $table->string('datashow', 4)->nullable();
            $table->string('computadores_mesa_alunos', 4)->nullable();
            $table->string('computadores_portateis_alunos', 4)->nullable();
            $table->string('tablets_alunos', 4)->nullable();
            $table->string('acesso_internet')->nullable(); // Array
            $table->string('equipamentos_alunos_internet')->nullable(); // Array
            $table->string('rede_local')->nullable(); // Array
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
            $table->string('organizacao_ensino')->nullable(); // Array
            $table->string('instrumentos_socioculturais'); // Array
            $table->tinyInteger('educacao_indigena');
            $table->string('lingua_indigena', 1)->nullable();
            $table->string('lingua_portuguesa', 1)->nullable();
            $table->foreignId('cod_indigena1')->nullable()->references('id')->on('linguas_indigenas');
            $table->foreignId('cod_indigena2')->nullable()->references('id')->on('linguas_indigenas');
            $table->foreignId('cod_indigena3')->nullable()->references('id')->on('linguas_indigenas');
            $table->tinyInteger('exame_selecao');
            $table->string('reserva_vagas')->nullable(); // Array
            $table->tinyInteger('possui_site');
            $table->tinyInteger('compartilha_espaco');
            $table->tinyInteger('utiliza_espacos_atividades');
            $table->string('orgaos_colegiados'); // Array
            $table->tinyInteger('ppp');
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
        Schema::dropIfExists('censo_escola');
    }
}
