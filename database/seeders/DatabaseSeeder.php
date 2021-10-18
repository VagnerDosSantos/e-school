<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(1)->create();
        $this->call([
            Helpers\PaisSeeder::class,
            Helpers\EstadoSeeder::class,
            Helpers\CidadeSeeder::class,
            Helpers\DistritoSeeder::class,
            Helpers\FaculdadeSeeder::class,
            Helpers\AtividadeComplementarSeeder::class,
            Helpers\CursoTecnicoSeeder::class,
            Helpers\CursoSuperiorSeeder::class,
            Helpers\ComponenteCurricularSeeder::class,
            Helpers\LinguaIndigenaSeeder::class,
            Helpers\DependenciaEscolarSeeder::class,
            Helpers\EtapaSeeder::class,
            Helpers\TurnoSeeder::class,
            Helpers\ClasseSeeder::class,
            Helpers\AtendimentoEducacionalEspecializadoSeeder::class,
        ]);
    }
}
