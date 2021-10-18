<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Turmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('escola_id', 8);
            $table->year('periodo');
            $table->string('codigo_turma', 20);
            $table->string('inep_turma', 10)->index();
            $table->string('nome', 80);
            $table->foreignId('turno_id')->references('id')->on('turnos');
            $table->foreignId('etapa_id')->nullable()->references('id')->on('etapas');
            $table->foreignId('classe_id')->references('id')->on('classes');
            $table->tinyInteger('mediacao_pedagogica');
            $table->time('hora_inicial')->nullable();
            $table->time('hora_final')->nullable();
            $table->string('dias_funcionamento')->nullable();
            $table->string('tipo_atendimento');
            $table->string('atividades_complementares')->nullable();
            $table->char('funcionamento_diferenciado')->nullable();
            $table->char('modalidade', 1)->nullable();
            $table->foreignId('curso_tecnico_id')->nullable()->references('id')->on('cursos_tecnicos');
            $table->string('componentes_curriculares')->nullable();

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
        Schema::dropIfExists('turmas');
    }
}
