<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtendimentoEducacionalEspecializado extends Model
{
    use HasFactory;
    protected $table = "atendimento_educacional_especializado";
    public $timestamps = false;
    protected $guarded = [];
}
