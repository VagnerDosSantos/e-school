<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::insert([
            ['id' => '1', 'name' => 'Educação infantil - creche (0 a 3 anos)', 'order' => '0'],
            ['id' => '2', 'name' => 'Educação infantil - pré-escola (4 e 5 anos)', 'order' => '1'],
            ['id' => '3', 'name' => 'Educação infantil - unificada (0 a 5 anos)', 'order' => '33'],
            ['id' => '14', 'name' => 'Ensino fundamental de 9 anos - 1º Ano', 'order' => '2'],
            ['id' => '15', 'name' => 'Ensino fundamental de 9 anos - 2º Ano', 'order' => '3'],
            ['id' => '16', 'name' => 'Ensino fundamental de 9 anos - 3º Ano', 'order' => '4'],
            ['id' => '17', 'name' => 'Ensino fundamental de 9 anos - 4º Ano', 'order' => '5'],
            ['id' => '18', 'name' => 'Ensino fundamental de 9 anos - 5º Ano', 'order' => '6'],
            ['id' => '19', 'name' => 'Ensino fundamental de 9 anos - 6º Ano', 'order' => '7'],
            ['id' => '20', 'name' => 'Ensino fundamental de 9 anos - 7º Ano', 'order' => '8'],
            ['id' => '21', 'name' => 'Ensino fundamental de 9 anos - 8º Ano', 'order' => '9'],
            ['id' => '22', 'name' => 'Ensino Fundamental de 9 anos - multi', 'order' => '34'],
            ['id' => '23', 'name' => 'Ensino Fundamental de 9 anos - correção de fluxo', 'order' => '35'],
            ['id' => '25', 'name' => 'Ensino médio - 1ª Série', 'order' => '11'],
            ['id' => '26', 'name' => 'Ensino médio - 2ª Série', 'order' => '12'],
            ['id' => '27', 'name' => 'Ensino médio - 3ª Série', 'order' => '13'],
            ['id' => '28', 'name' => 'Ensino médio - 4ª Série', 'order' => '14'],
            ['id' => '29', 'name' => 'Ensino médio - não seriada', 'order' => '15'],
            ['id' => '30', 'name' => 'Curso técnico integrado (ensino médio integrado) 1ª Série', 'order' => '23'],
            ['id' => '31', 'name' => 'Curso técnico integrado (ensino médio integrado) 2ª Série', 'order' => '24'],
            ['id' => '32', 'name' => 'Curso técnico integrado (ensino médio integrado) 3ª Série', 'order' => '25'],
            ['id' => '33', 'name' => 'Curso técnico integrado (ensino médio integrado) 4ª Série', 'order' => '26'],
            ['id' => '34', 'name' => 'Curso técnico integrado (ensino médio integrado) não seriada', 'order' => '27'],
            ['id' => '35', 'name' => 'Ensino médio - normal/magistério 1ª Série', 'order' => '16'],
            ['id' => '36', 'name' => 'Ensino médio - normal/magistério 2ª Série', 'order' => '17'],
            ['id' => '37', 'name' => 'Ensino médio - normal/magistério 3ª Série', 'order' => '18'],
            ['id' => '38', 'name' => 'Ensino médio - normal/magistério 4ª Série', 'order' => '19'],
            ['id' => '39', 'name' => 'Curso técnico - concomitante', 'order' => '28'],
            ['id' => '40', 'name' => 'Curso técnico - subsequente', 'order' => '29'],
            ['id' => '41', 'name' => 'Ensino fundamental de 9 anos - 9º Ano', 'order' => '10'],
            ['id' => '56', 'name' => 'Educação infantil e ensino fundamental de 9 anos - multietapa', 'order' => '36'],
            ['id' => '64', 'name' => 'Curso técnico misto', 'order' => '30'],
            ['id' => '67', 'name' => 'Curso FIC integrado na modalidade EJA - nível médio', 'order' => '31'],
            ['id' => '68', 'name' => 'Curso FIC concomitante ', 'order' => '32'],
            ['id' => '69', 'name' => 'EJA - ensino fundamental - anos iniciais', 'order' => '20'],
            ['id' => '70', 'name' => 'EJA - ensino fundamental - anos finais', 'order' => '21'],
            ['id' => '71', 'name' => 'EJA - ensino médio', 'order' => '22'],
            ['id' => '72', 'name' => 'EJA - ensino fundamental - anos iniciais e anos finais', 'order' => '37'],
            ['id' => '73', 'name' => 'Curso FIC integrado na modalidade EJA – nível fundamental (EJA integrada à educação profissional de nível fundamental)', 'order' => '38'],
            ['id' => '74', 'name' => 'Curso técnico integrado na modalidade EJA (EJA integrada à educação profissional de nível médio)', 'order' => '39'],
        ]);
    }
}
