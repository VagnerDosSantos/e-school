<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\SpecializedEducationalService;

class SpecializedEducationalServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpecializedEducationalService::insert([
            ['id' => '1', 'name' => 'Ensino de Sistema Braille'],
            ['id' => '3', 'name' => 'Ensino de uso de recursos ópticos e não ópticos'],
            ['id' => '4', 'name' => 'Desenvolvimento de funções cognitivas'],
            ['id' => '5', 'name' => 'Ensino de técnicas para orientação e mobilidade'],
            ['id' => '6', 'name' => 'Ensino da Língua Brasileira de Sinais (Libras]'],
            ['id' => '7', 'name' => 'Ensino de uso da Comunicação Alternativa e Aumentativa (CAA]'],
            ['id' => '8', 'name' => 'Enriquecimento curricular'],
            ['id' => '9', 'name' => 'Ensino das técnicas do cálculo no Soroban'],
            ['id' => '10', 'name' => 'Ensino da informática acessível'],
            ['id' => '11', 'name' => 'Ensino da Língua Portuguesa como segunda língua'],
            ['id' => '12', 'name' => 'Desenvolvimento de vida autônoma']
        ]);
    }
}
