<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponenteCurricular extends Model
{
    use HasFactory;
    protected $table = "componentes_curriculares";
    public $timestamps = false;
    protected $guarded = [];
}
