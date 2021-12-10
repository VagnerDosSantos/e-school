<?php

namespace Database\Factories;

use App\Models\Escola;
use App\Models\CensoEscola;
use Illuminate\Database\Eloquent\Factories\Factory;

class CensoEscolaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CensoEscola::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'escola_id' => Escola::first()->codigo_escola,
            'periodo' => date('Y'),
            'situacao' => $this->faker->numberBetween(1, 3),
            'data_inicio' => $this->faker->date('Y-m-d'),
            'data_final' => $this->faker->date('Y-m-d'),
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
            'local_funcionamento' => 1,
            'forma_ocupacao' => 1,
            'codigo_escola_compartilha' => null,
            'fornece_agua' => '1',
            'abastecimento_agua' => [1, 2],
            'fonte_energia' => [1, 2],
            'esgotamento_sanitario' => [1, 2],
            'destino_lixo' => [1, 2],
            'tratamento_lixo' => [1, 2],
            'dependencias_fisicas' => [1, 2],
            'recursos_acessibilidade' => [1, 2],
            'salas_dentro_predio' => '1',
            'salas_fora_predio' => '1',
            'salas_climatizadas' => null,
            'salas_acesssiveis' => null,
            'equipamentos_adminstrativo' => [1],
            'dvd' => '1',
            'som' => '1',
            'televisao' => '1',
            'lousa_digital' => '1',
            'datashow' => '1',
            'computadores_mesa_alunos' => '1',
            'computadores_portateis_alunos' => '1',
            'tablets_alunos' => '1',
            'acesso_internet' => [1, 2],
            'equipamentos_alunos_internet' => [2],
            'rede_local' => [1],
            'auxiliar_secretaria' => '1',
            'servicos_gerais' => '1',
            'bibliotecario' => '1',
            'bombeiro' => '1',
            'coordenador_turno_disciplinar' => '1',
            'fonoaudiologo' => '1',
            'nutricionista' => '1',
            'psicologo' => '1',
            'cozinheiro' => '1',
            'supervisor_pedagogico' => '1',
            'secretario_escolar' => '1',
            'monitores' => '1',
            'vice_diretor_adjunto' => '1',
            'orientador_comunitario' => '1',
            'merenda_escolar' => '1',
            'organizacao_ensino' => [1, 2],
            'instrumentos_socioculturais' => [1, 2],
            'educacao_indigena' => '0',
            'lingua_indigena' => null,
            'lingua_portuguesa' => null,
            'cod_indigena1' => null,
            'cod_indigena2' => null,
            'cod_indigena3' => null,
            'exame_selecao' => '1',
            'reserva_vagas' => [1, 2],
            'possui_site' => '1',
            'compartilha_espaco' => '1',
            'utiliza_espacos_atividades' => '1',
            'orgaos_colegiados' => [1, 2],
            'ppp' => '1'
        ];
    }
}
