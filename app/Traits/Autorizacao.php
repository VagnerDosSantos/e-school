<?php

namespace App\Traits;

use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;

trait Autorizacao
{
    public function autorizacao(string $acao, Model $modelo): void
    {
        Request()->user()->cannot($acao, $modelo);
        Gate::authorize($acao, $modelo);
    }
}
