<?php

namespace App\Repository\Interfaces;

use Illuminate\Http\Request;

interface BaseInterface
{
    public function inserir(Request $request);
    public function atualizar(Request $request, string $id);
    public function deletar(string $id);
}
