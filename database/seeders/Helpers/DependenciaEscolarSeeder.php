<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\DependenciaEscolar;

class DependenciaEscolarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DependenciaEscolar::insert([
            ['id' => '1', 'nome' => 'Sala de diretoria'],
            ['id' => '2', 'nome' => 'Sala de professores'],
            ['id' => '3', 'nome' => 'Laboratório de informática'],
            ['id' => '4', 'nome' => 'Laboratório de ciências'],
            ['id' => '5', 'nome' => 'Sala de recursos multifuncionais para Atendimento Educacional Especializado (AEE]'],
            ['id' => '7', 'nome' => 'Cozinha'],
            ['id' => '8', 'nome' => 'Biblioteca'],
            ['id' => '9', 'nome' => 'Parque infantil'],
            ['id' => '12', 'nome' => 'Banheiro acessível, adequado ao uso de pessoas com deficiência ou mobilidade reduzida'],
            ['id' => '14', 'nome' => 'Nenhuma das dependências relacionadas'],
            ['id' => '15', 'nome' => 'Sala de leitura'],
            ['id' => '17', 'nome' => 'Banheiro adequado à educação infantil'],
            ['id' => '18', 'nome' => 'Quadra de esportes descoberta'],
            ['id' => '19', 'nome' => 'Quadra de esportes coberta'],
            ['id' => '20', 'nome' => 'Refeitório'],
            ['id' => '22', 'nome' => 'Auditório'],
            ['id' => '23', 'nome' => 'Banheiro ou vestiário com chuveiro'],
            ['id' => '24', 'nome' => 'Almoxarifado'],
            ['id' => '25', 'nome' => 'Pátio coberto'],
            ['id' => '26', 'nome' => 'Pátio descoberto'],
            ['id' => '27', 'nome' => 'Área verde'],
            ['id' => '28', 'nome' => 'Dormitório de aluno(a]'],
            ['id' => '29', 'nome' => 'Dormitório de professor(a]'],
            ['id' => '30', 'nome' => 'Despensa'],
            ['id' => '31', 'nome' => 'Sala de secretaria'],
            ['id' => '32', 'nome' => 'Banheiro exclusivo para os funcionários'],
            ['id' => '33', 'nome' => 'Piscina'],
            ['id' => '34', 'nome' => 'Sala/ateliê de artes'],
            ['id' => '35', 'nome' => 'Sala de música/coral'],
            ['id' => '36', 'nome' => 'Sala/estúdio de dança'],
            ['id' => '37', 'nome' => 'Sala multiuso (música, dança e artes]'],
            ['id' => '38', 'nome' => 'Terreirão (área para prática desportiva e recreação sem cobertura, sem piso e sem edificações]'],
            ['id' => '39', 'nome' => 'Viveiro/criação de animais'],
            ['id' => '40', 'nome' => 'Sala de repouso para aluno(a]'],
            ['id' => '41', 'nome' => 'Banheiro']
        ]);
    }
}
