<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DependenciaEscolar extends Model
{
    use HasFactory;
    protected $table = "dependencias_escolares";
    public $timestamps = false;
    protected $guarded = [];
}
