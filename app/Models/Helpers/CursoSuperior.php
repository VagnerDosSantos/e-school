<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoSuperior extends Model
{
    use HasFactory;
    protected $table = "cursos_superiores";
    public $timestamps = false;
    protected $guarded = [];
}
