<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelperTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('nacionalidade', 100)->nullable();
            $table->string('ddi', 3)->nullable();
        });

        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('uf', 2);
        });

        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->foreignId('estado_id')->references('id')->on('estados');
        });

        Schema::create('distritos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->foreignId('cidade_id')->references('id')->on('cidades');
        });

        Schema::create('atividades_complementares', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
        });

        Schema::create('cursos_superiores', function (Blueprint $table) {
            $table->string("id", 32);
            $table->string('nome', 100);
            $table->primary("id");
        });

        Schema::create('componentes_curriculares', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('censo_id');
            $table->string('abreviacao', 50);
        });

        Schema::create('etapas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->tinyInteger('ordem');
        });

        Schema::create('faculdades', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->tinyInteger('situacao');
            $table->unsignedBigInteger('cidade_id')->nullable();

            $table->foreign('cidade_id')->references('id')->on('cidades');
        });

        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
        });

        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
        });

        Schema::create('atendimento_educacional_especializado', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
        });

        Schema::create('linguas_indigenas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
        });

        Schema::create('dependencias_escolares', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
        });

        Schema::create('cursos_tecnicos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paises');
        Schema::dropIfExists('estados');
        Schema::dropIfExists('cidades');
        Schema::dropIfExists('distritos');
        Schema::dropIfExists('atividades_complementares');
        Schema::dropIfExists('cursos_superiores');
        Schema::dropIfExists('componentes_curriculares');
        Schema::dropIfExists('etapas');
        Schema::dropIfExists('faculdades');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('turnos');
        Schema::dropIfExists('atendimento_educacional_especializado');
        Schema::dropIfExists('linguas_indigenas');
        Schema::dropIfExists('dependencias_escolares');
        Schema::dropIfExists('cursos_tecnicos');
    }
}
