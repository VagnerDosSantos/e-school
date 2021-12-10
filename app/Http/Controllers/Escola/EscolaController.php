<?php

namespace App\Http\Controllers\Escola;

use App\Http\Controllers\Controller;
use App\Repository\Escola\EscolaRepository;
use Illuminate\Http\Request;
use App\Http\Requests\EscolaRequest;

class EscolaController extends Controller
{
    private EscolaRepository $escola;

    public function __construct(EscolaRepository $escola)
    {
        $this->escola = $escola;
    }

    public function index()
    {
        return view('escola.pesquisar', [
            'escolas' => $this->escola->pesquisar()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('escola.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscolaRequest $request)
    {
        $validar = $request->validated();

        echo '<pre>';
        print_r($validar);
        echo '</pre>';

        exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('escola.formulario', [
            'escola' => $this->escola->escola($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): void
    {
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        exit;
        $this->escola->atualizar($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->escola->deletar($id);
    }
}
