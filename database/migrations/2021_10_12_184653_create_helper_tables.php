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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('nationality', 100)->nullable();
            $table->string('ddi', 3)->nullable();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('fu', 2);
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->foreignId('state_id')->constrained('states');
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->foreignId('city_id')->constrained('cities');
        });

        Schema::create('additional_activities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
        });

        Schema::create('degrees', function (Blueprint $table) {
            $table->string("id", 32);
            $table->string('name', 100);
            $table->primary("id");
        });

        Schema::create('school_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('census_id');
            $table->string('abbreviation', 50);
        });

        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->tinyInteger('order');
        });

        Schema::create('educational_institutions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->tinyInteger('situation');
            $table->unsignedBigInteger('city_id')->nullable();
            
            $table->foreign('city_id')->references('id')->on('cities');
        });

        Schema::create('class_names', function (Blueprint $table) {
            $table->id(); //ABCD
            $table->string('name', 255);
        });

        Schema::create('class_shifts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
        });

        Schema::create('specialized_educational_services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
        });

        Schema::create('indigenous_languages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
        });

        Schema::create('school_dependencies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
        });

        Schema::create('certificate_programs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('states');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('additional_activities');
        Schema::dropIfExists('degrees');
        Schema::dropIfExists('school_subjects');
        Schema::dropIfExists('grades');
        Schema::dropIfExists('educational_institutions');
        Schema::dropIfExists('class_names');
        Schema::dropIfExists('class_shifts');
        Schema::dropIfExists('specialized_educational_services');
        Schema::dropIfExists('indigenous_languages');
        Schema::dropIfExists('school_dependencies');
        Schema::dropIfExists('certificate_programs');
    }
}
