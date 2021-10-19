<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function usuario()
    {
        return $this->hasOne(User::class, 'escola_id', 'codigo_escola');
    }

    public function usuarios()
    {
        return $this->hasMany(User::class, 'escola_id', 'codigo_escola');
    }

    public function censo()
    {
        return $this->hasOne(CensoEscola::class, 'escola_id', 'codigo_escola')->orderBy('periodo', 'desc');
    }
}
