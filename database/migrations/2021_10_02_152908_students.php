<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('school_code');
            $table->string('student_code');
            $table->string('student_inep_code')->nullable();
            $table->year('period');
            $table->string('name');
            $table->date('birthdate');

            $table->integer('id_parents')->reference('id')->on('parents');
            $table->string('cpf')->nullable();
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
        Schema::drop('students');
    }
}
