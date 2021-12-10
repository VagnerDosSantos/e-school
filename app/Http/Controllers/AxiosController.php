<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helpers\{Pais, Estado, Cidade, Distrito};

class AxiosController extends Controller
{
    public function paises()
    {
        echo json_encode(Pais::orderBy('nome')->get());
    }

    public function estados()
    {
        echo json_encode(Estado::orderBy('nome')->get());
    }

    public function cidades(Request $request)
    {
        echo json_encode(Cidade::where('estado_id', $request->id)->orderBy('nome')->get());
    }

    public function distritos(Request $request)
    {
        $distritos = Distrito::where('cidade_id', $request->cidade)->orderBy('nome')->get();
        echo json_encode($distritos);
    }
}
