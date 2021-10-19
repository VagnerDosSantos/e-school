<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\{Escola, CensoEscola};

class DatabaseSeeder extends Seeder
{
    public function run()
    {
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

        Escola::factory(10)
            ->has(CensoEscola::factory(), 'censo')
            ->has(User::factory(), 'usuarios')
            ->create();
    }
}
