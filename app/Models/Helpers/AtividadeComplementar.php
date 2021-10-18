<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadeComplementar extends Model
{
    use HasFactory;
    protected $table = "atividades_complementares";
    public $timestamps = false;
    protected $guarded = [];
}
