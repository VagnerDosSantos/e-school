<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class CensoEscola extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'local_funcionamento' => AsArrayObject::class,
        'abastecimento_agua' => AsArrayObject::class,
        'fonte_energia' => AsArrayObject::class,
        'esgotamento_sanitario' => AsArrayObject::class,
        'destino_lixo' => AsArrayObject::class,
        'tratamento_lixo' => AsArrayObject::class,
        'dependencias_fisicas' => AsArrayObject::class,
        'recursos_acessibilidade' => AsArrayObject::class,
        'equipamentos_adminstrativo' => AsArrayObject::class,
        'acesso_internet' => AsArrayObject::class,
        'equipamentos_alunos_internet' => AsArrayObject::class,
        'rede_local' => AsArrayObject::class,
        'organizacao_ensino' => AsArrayObject::class,
        'reserva_vagas' => AsArrayObject::class,
        'instrumentos_socioculturais' => AsArrayObject::class,
        'orgaos_colegiados' => AsArrayObject::class,
    ];
}
