@extends('templates.escola')

@section('conteudo')
    <form action="{{ route('escola.inserir') }}" method="post">
        @csrf
        <input type="text" name="nome" id="nome">
        <input type="text" name="situacao" id="situacao" value="1">
        <button type="submit">salvar</button>
    </form>
@endsection