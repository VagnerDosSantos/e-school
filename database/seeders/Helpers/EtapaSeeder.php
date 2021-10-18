<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\Etapa;

class EtapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etapa::insert([
            ['id' => '1', 'nome' => 'Educação infantil - creche (0 a 3 anos)', 'ordem' => '0'],
            ['id' => '2', 'nome' => 'Educação infantil - pré-escola (4 e 5 anos)', 'ordem' => '1'],
            ['id' => '3', 'nome' => 'Educação infantil - unificada (0 a 5 anos)', 'ordem' => '33'],
            ['id' => '14', 'nome' => 'Ensino fundamental de 9 anos - 1º Ano', 'ordem' => '2'],
            ['id' => '15', 'nome' => 'Ensino fundamental de 9 anos - 2º Ano', 'ordem' => '3'],
            ['id' => '16', 'nome' => 'Ensino fundamental de 9 anos - 3º Ano', 'ordem' => '4'],
            ['id' => '17', 'nome' => 'Ensino fundamental de 9 anos - 4º Ano', 'ordem' => '5'],
            ['id' => '18', 'nome' => 'Ensino fundamental de 9 anos - 5º Ano', 'ordem' => '6'],
            ['id' => '19', 'nome' => 'Ensino fundamental de 9 anos - 6º Ano', 'ordem' => '7'],
            ['id' => '20', 'nome' => 'Ensino fundamental de 9 anos - 7º Ano', 'ordem' => '8'],
            ['id' => '21', 'nome' => 'Ensino fundamental de 9 anos - 8º Ano', 'ordem' => '9'],
            ['id' => '22', 'nome' => 'Ensino Fundamental de 9 anos - multi', 'ordem' => '34'],
            ['id' => '23', 'nome' => 'Ensino Fundamental de 9 anos - correção de fluxo', 'ordem' => '35'],
            ['id' => '25', 'nome' => 'Ensino médio - 1ª Série', 'ordem' => '11'],
            ['id' => '26', 'nome' => 'Ensino médio - 2ª Série', 'ordem' => '12'],
            ['id' => '27', 'nome' => 'Ensino médio - 3ª Série', 'ordem' => '13'],
            ['id' => '28', 'nome' => 'Ensino médio - 4ª Série', 'ordem' => '14'],
            ['id' => '29', 'nome' => 'Ensino médio - não seriada', 'ordem' => '15'],
            ['id' => '30', 'nome' => 'Curso técnico integrado (ensino médio integrado) 1ª Série', 'ordem' => '23'],
            ['id' => '31', 'nome' => 'Curso técnico integrado (ensino médio integrado) 2ª Série', 'ordem' => '24'],
            ['id' => '32', 'nome' => 'Curso técnico integrado (ensino médio integrado) 3ª Série', 'ordem' => '25'],
            ['id' => '33', 'nome' => 'Curso técnico integrado (ensino médio integrado) 4ª Série', 'ordem' => '26'],
            ['id' => '34', 'nome' => 'Curso técnico integrado (ensino médio integrado) não seriada', 'ordem' => '27'],
            ['id' => '35', 'nome' => 'Ensino médio - normal/magistério 1ª Série', 'ordem' => '16'],
            ['id' => '36', 'nome' => 'Ensino médio - normal/magistério 2ª Série', 'ordem' => '17'],
            ['id' => '37', 'nome' => 'Ensino médio - normal/magistério 3ª Série', 'ordem' => '18'],
            ['id' => '38', 'nome' => 'Ensino médio - normal/magistério 4ª Série', 'ordem' => '19'],
            ['id' => '39', 'nome' => 'Curso técnico - concomitante', 'ordem' => '28'],
            ['id' => '40', 'nome' => 'Curso técnico - subsequente', 'ordem' => '29'],
            ['id' => '41', 'nome' => 'Ensino fundamental de 9 anos - 9º Ano', 'ordem' => '10'],
            ['id' => '56', 'nome' => 'Educação infantil e ensino fundamental de 9 anos - multietapa', 'ordem' => '36'],
            ['id' => '64', 'nome' => 'Curso técnico misto', 'ordem' => '30'],
            ['id' => '67', 'nome' => 'Curso FIC integrado na modalidade EJA - nível médio', 'ordem' => '31'],
            ['id' => '68', 'nome' => 'Curso FIC concomitante ', 'ordem' => '32'],
            ['id' => '69', 'nome' => 'EJA - ensino fundamental - anos iniciais', 'ordem' => '20'],
            ['id' => '70', 'nome' => 'EJA - ensino fundamental - anos finais', 'ordem' => '21'],
            ['id' => '71', 'nome' => 'EJA - ensino médio', 'ordem' => '22'],
            ['id' => '72', 'nome' => 'EJA - ensino fundamental - anos iniciais e anos finais', 'ordem' => '37'],
            ['id' => '73', 'nome' => 'Curso FIC integrado na modalidade EJA – nível fundamental (EJA integrada à educação profissional de nível fundamental)', 'ordem' => '38'],
            ['id' => '74', 'nome' => 'Curso técnico integrado na modalidade EJA (EJA integrada à educação profissional de nível médio)', 'ordem' => '39'],
        ]);
    }
}
