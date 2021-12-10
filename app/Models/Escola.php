<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Escola extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeEscola($query)
    {
        return $query->where('codigo_escola', Auth::user()->escola_id)
            ->when(Auth::user()->admin === 1, function ($q) {
                $q->orWhere('codigo_escola', '>', 0);
            });
    }

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

    public static function booted()
    {
        static::deleting(function ($escola) {
            $escola->censo()->delete();
            $escola->usuarios()->delete();
        });
    }
}
