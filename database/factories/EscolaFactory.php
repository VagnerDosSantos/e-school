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
            'nome' => $this->faker->company(),
            'ato_criacao' => null,
            'foto' => null
        ];
    }
}
