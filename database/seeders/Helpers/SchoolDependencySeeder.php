<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\SchoolDependency;

class SchoolDependencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolDependency::insert([
            ['id' => '1', 'name' => 'Sala de diretoria'],
            ['id' => '2', 'name' => 'Sala de professores'],
            ['id' => '3', 'name' => 'Laboratório de informática'],
            ['id' => '4', 'name' => 'Laboratório de ciências'],
            ['id' => '5', 'name' => 'Sala de recursos multifuncionais para Atendimento Educacional Especializado (AEE]'],
            ['id' => '7', 'name' => 'Cozinha'],
            ['id' => '8', 'name' => 'Biblioteca'],
            ['id' => '9', 'name' => 'Parque infantil'],
            ['id' => '12', 'name' => 'Banheiro acessível, adequado ao uso de pessoas com deficiência ou mobilidade reduzida'],
            ['id' => '14', 'name' => 'Nenhuma das dependências relacionadas'],
            ['id' => '15', 'name' => 'Sala de leitura'],
            ['id' => '17', 'name' => 'Banheiro adequado à educação infantil'],
            ['id' => '18', 'name' => 'Quadra de esportes descoberta'],
            ['id' => '19', 'name' => 'Quadra de esportes coberta'],
            ['id' => '20', 'name' => 'Refeitório'],
            ['id' => '22', 'name' => 'Auditório'],
            ['id' => '23', 'name' => 'Banheiro ou vestiário com chuveiro'],
            ['id' => '24', 'name' => 'Almoxarifado'],
            ['id' => '25', 'name' => 'Pátio coberto'],
            ['id' => '26', 'name' => 'Pátio descoberto'],
            ['id' => '27', 'name' => 'Área verde'],
            ['id' => '28', 'name' => 'Dormitório de aluno(a]'],
            ['id' => '29', 'name' => 'Dormitório de professor(a]'],
            ['id' => '30', 'name' => 'Despensa'],
            ['id' => '31', 'name' => 'Sala de secretaria'],
            ['id' => '32', 'name' => 'Banheiro exclusivo para os funcionários'],
            ['id' => '33', 'name' => 'Piscina'],
            ['id' => '34', 'name' => 'Sala/ateliê de artes'],
            ['id' => '35', 'name' => 'Sala de música/coral'],
            ['id' => '36', 'name' => 'Sala/estúdio de dança'],
            ['id' => '37', 'name' => 'Sala multiuso (música, dança e artes]'],
            ['id' => '38', 'name' => 'Terreirão (área para prática desportiva e recreação sem cobertura, sem piso e sem edificações]'],
            ['id' => '39', 'name' => 'Viveiro/criação de animais'],
            ['id' => '40', 'name' => 'Sala de repouso para aluno(a]'],
            ['id' => '41', 'name' => 'Banheiro']
        ]);
    }
}
