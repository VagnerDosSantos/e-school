<?php

namespace Database\Factories;

use App\Models\Escola;
use Illuminate\Database\Eloquent\Factories\Factory;

class EscolaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Escola::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_escola' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'situacao' => $this->faker->numberBetween(1, 3),
            'data_inicio' => $this->faker->date('Y-m-d'),
            'data_final' => $this->faker->date('Y-m-d'),
            'nome' => $this->faker->company(),
            'ato_criacao' => null,
            'cep' => '48860000',
            'estado_id' => 11,
            'cidade_id' => 2200053,
            'distrito_id' => 220005305,
            'endereco' => $this->faker->streetName(),
            'numero' => $this->faker->buildingNumber(),
            'complemento' => $this->faker->citySuffix(),
            'bairro' => $this->faker->city(),
            'telefone' => '(75) 9 9999-9999',
            'telefone_2' => '(75) 9 9999-9999',
            'email' => $this->faker->email(),
            'codigo_regional' => 123,
            'localizacao' => $this->faker->numberBetween(1, 2),
            'localizacao_diferenciada' => 1,
            'dependencia_administrativa' => 1,
            'vinculo_escolar' => 1,
            'regulamentacao_conselho' => 1,
            'esfera_administrativa' => 1,
            'unidade_vinculada' => 0,
        ];
    }
}
