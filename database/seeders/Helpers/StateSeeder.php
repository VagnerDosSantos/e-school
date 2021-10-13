<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([
            ['id' => '11', 'name' => 'Rondônia', 'fu' => 'RO'],
            ['id' => '12', 'name' => 'Acre', 'fu' => 'AC'],
            ['id' => '13', 'name' => 'Amazonas', 'fu' => 'AM'],
            ['id' => '14', 'name' => 'Roraima', 'fu' => 'RR'],
            ['id' => '15', 'name' => 'Pará', 'fu' => 'PA'],
            ['id' => '16', 'name' => 'Amapá', 'fu' => 'AP'],
            ['id' => '17', 'name' => 'Tocantins', 'fu' => 'TO'],
            ['id' => '21', 'name' => 'Maranhão', 'fu' => 'MA'],
            ['id' => '22', 'name' => 'Piauí', 'fu' => 'PI'],
            ['id' => '23', 'name' => 'Ceará', 'fu' => 'CE'],
            ['id' => '24', 'name' => 'Rio Grande do Norte', 'fu' => 'RN'],
            ['id' => '25', 'name' => 'Paraíba', 'fu' => 'PB'],
            ['id' => '26', 'name' => 'Pernambuco', 'fu' => 'PE'],
            ['id' => '27', 'name' => 'Alagoas', 'fu' => 'AL'],
            ['id' => '28', 'name' => 'Sergipe', 'fu' => 'SE'],
            ['id' => '29', 'name' => 'Bahia', 'fu' => 'BA'],
            ['id' => '31', 'name' => 'Minas Gerais', 'fu' => 'MG'],
            ['id' => '32', 'name' => 'Espírito Santo', 'fu' => 'ES'],
            ['id' => '33', 'name' => 'Rio de Janeiro', 'fu' => 'RJ'],
            ['id' => '35', 'name' => 'São Paulo', 'fu' => 'SP'],
            ['id' => '41', 'name' => 'Paraná', 'fu' => 'PR'],
            ['id' => '42', 'name' => 'Santa Catarina', 'fu' => 'SC'],
            ['id' => '43', 'name' => 'Rio Grande do Sul', 'fu' => 'RS'],
            ['id' => '50', 'name' => 'Mato Grosso do Sul', 'fu' => 'MS'],
            ['id' => '51', 'name' => 'Mato Grosso', 'fu' => 'MT'],
            ['id' => '52', 'name' => 'Goiás', 'fu' => 'GO'],
            ['id' => '53', 'name' => 'Distrito Federal', 'fu' => 'DF']
        ]);
    }
}
