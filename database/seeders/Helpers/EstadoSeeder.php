<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::insert([
            ['id' => '11', 'nome' => 'Rondônia', 'uf' => 'RO'],
            ['id' => '12', 'nome' => 'Acre', 'uf' => 'AC'],
            ['id' => '13', 'nome' => 'Amazonas', 'uf' => 'AM'],
            ['id' => '14', 'nome' => 'Roraima', 'uf' => 'RR'],
            ['id' => '15', 'nome' => 'Pará', 'uf' => 'PA'],
            ['id' => '16', 'nome' => 'Amapá', 'uf' => 'AP'],
            ['id' => '17', 'nome' => 'Tocantins', 'uf' => 'TO'],
            ['id' => '21', 'nome' => 'Maranhão', 'uf' => 'MA'],
            ['id' => '22', 'nome' => 'Piauí', 'uf' => 'PI'],
            ['id' => '23', 'nome' => 'Ceará', 'uf' => 'CE'],
            ['id' => '24', 'nome' => 'Rio Grande do Norte', 'uf' => 'RN'],
            ['id' => '25', 'nome' => 'Paraíba', 'uf' => 'PB'],
            ['id' => '26', 'nome' => 'Pernambuco', 'uf' => 'PE'],
            ['id' => '27', 'nome' => 'Alagoas', 'uf' => 'AL'],
            ['id' => '28', 'nome' => 'Sergipe', 'uf' => 'SE'],
            ['id' => '29', 'nome' => 'Bahia', 'uf' => 'BA'],
            ['id' => '31', 'nome' => 'Minas Gerais', 'uf' => 'MG'],
            ['id' => '32', 'nome' => 'Espírito Santo', 'uf' => 'ES'],
            ['id' => '33', 'nome' => 'Rio de Janeiro', 'uf' => 'RJ'],
            ['id' => '35', 'nome' => 'São Paulo', 'uf' => 'SP'],
            ['id' => '41', 'nome' => 'Paraná', 'uf' => 'PR'],
            ['id' => '42', 'nome' => 'Santa Catarina', 'uf' => 'SC'],
            ['id' => '43', 'nome' => 'Rio Grande do Sul', 'uf' => 'RS'],
            ['id' => '50', 'nome' => 'Mato Grosso do Sul', 'uf' => 'MS'],
            ['id' => '51', 'nome' => 'Mato Grosso', 'uf' => 'MT'],
            ['id' => '52', 'nome' => 'Goiás', 'uf' => 'GO'],
            ['id' => '53', 'nome' => 'Distrito Federal', 'uf' => 'DF']
        ]);
    }
}
