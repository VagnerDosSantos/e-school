<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoTecnico extends Model
{
    use HasFactory;
    protected $table = "cursos_tecnicos";
    public $timestamps = false;
    protected $guarded = [];
}
