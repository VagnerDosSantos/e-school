<?php

namespace App\Repository\Escola;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Repository\Interfaces\BaseInterface;
use App\Models\Escola;
use App\Traits\Autorizacao;
use Illuminate\Support\Facades\DB;

class EscolaRepository implements BaseInterface
{
    use Autorizacao;
    protected Model $escola;

    public function __construct(Escola $escola)
    {
        $this->escola = $escola;
    }

    public function inserir(Request $request)
    {
        
    }

    public function atualizar(Request $request, string $id)
    {
    }

    public function deletar(string $id): void
    {
        $this->autorizacao('delete', $this->escola);
        DB::transaction(function () use ($id) {
            $escola = $this->escola->where('codigo_escola', $id)->first();
            if ($escola) {
                $escola = $escola->delete();
            }
        }, 1);
    }
}
