@extends('templates.sistema')

@section('conteudo')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <i class="material-icons left">search</i> Escola - Pesquisar
            </div>

            <table class="card-body highlight">
                <thead>
                    <tr>
                        <th class="center-align w-1">ID</th>
                        <th>Nome</th>
                        <th class="center-align w-1">Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($escolas as $escola)
                        <tr>
                            <td>{{ $escola->codigo_escola }}</td>
                            <td>{{ $escola->nome }}</td>
                            <td class="nowrap">
                                <a href="" class="btn btn-small green green accent-4 tooltip" data-position="top"
                                    data-tooltip="Lorem Ipsum"><i class="material-icons">analytics</i></a>

                                <a href="{{ route('escola.editar', ['id' => $escola->id]) }}"
                                    class="btn btn-small blue accent-4 tooltip" data-position="top"
                                    data-tooltip="Clique para editar a escola"><i class="material-icons">edit</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
