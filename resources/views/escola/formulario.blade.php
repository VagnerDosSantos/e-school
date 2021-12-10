@extends('templates.sistema')

@section('conteudo')
    <div class="container">
        <div class="card">
            <form action="{{ route('escola.editar2', ['id' => Request()->id]) }}" method="post">
                @csrf
                <div class="card-header">
                    <i class="material-icons left">home</i> Identificação
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col s12 m8 input-field">
                            <label for="nome" class="testando">Nome</label>
                            <input type="text" name="nome" id="nome" value="{{ old('nome') ?? $escola->nome }}"
                                placeholder="Nome da escola" testando>
                            <x-form-tooltip :mensagem="'Nome do estabelecimento de ensino registrado oficialmente '" />
                        </div>

                        <div class="col s6 m2 input-field">
                            <label for="codigo_escola" class="testando">Código do INEP</label>
                            <input type="text" name="codigo_escola" id="codigo_escola"
                                placeholder="Número do código do INEP" max="8" min="8"
                                value="{{ old('codigo_escola') ?? $escola->codigo_escola }}" testando>
                            <x-form-tooltip
                                :mensagem="'Esse código permite identificar cada escola de maneira unificada, de acordo com o cadastro junto ao Ministério da Educação - deve conter 8 caracteres numéricos e nenhuma letra. Ex.: 13082175'" />
                        </div>

                        <div class="col s6 m2 input-field">
                            <label for="ato_criacao">Ato de criação</label>
                            <input type="text" name="ato_criacao" id="ato_criacao" placeholder="Ato de criação da escola"
                                value="{{ old('ato_criacao') ?? $escola->ato_criacao }}">
                        </div>

                        <div class="col s12 m4 input-field">
                            <label for="email" class="testando">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email da escola"
                                value="{{ old('email') ?? $escola->censo->email }}" testando>
                            <x-form-tooltip :mensagem="'Digite o principal email da escola'" />
                        </div>

                        <div class="col s6 m2 input-field">
                            <label for="telefone">Telefone 1</label>
                            <input type="text" name="telefone" id="telefone" placeholder="Número de telefone"
                                value="{{ old('telefone') ?? $escola->censo->telefone }}">
                            <x-form-tooltip :mensagem="'Digite o número de telefone principal'" />
                        </div>

                        <div class="col s6 m2 input-field">
                            <label for="telefone">Telefone 2</label>
                            <input type="text" name="telefone_2" id="telefone_2" placeholder="Número de telefone"
                                value="{{ old('telefone_2') ?? $escola->censo->telefone_2 }}">
                            <x-form-tooltip :mensagem="'Se houver, digite um numero de telefone secundário'" />
                        </div>

                        <div class="col s12 m4 select-field">
                            <label for="codigo_regional">Orgão regional de ensino</label>
                            <select name="codigo_regional" class="browser-default" id="codigo_regional">
                                <option value="">Selecione</option>
                            </select>
                            <x-form-tooltip :class="'form-tooltip-select'"
                                :mensagem="'O órgão regional identifica uma determinada regional de ensino, a qual se configura como uma subdivisão
                                                                    administrativa da secretaria de educação e pode compreender escolas de uma ou de várias regiões ou municípios'" />
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <i class="material-icons left">gps_fixed</i> Localização
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col s12 m4 input-field">
                            <label for="endereco" class="testando">Endereço</label>
                            <input type="text" name="endereco" id="endereco"
                                value="{{ old('endereco') ?? $escola->censo->endereco }}" placeholder="Endereço da escola"
                                testando>
                        </div>

                        <div class="col s12 m1 input-field">
                            <label for="numero">Numero</label>
                            <input type="text" name="numero" id="numero"
                                value="{{ old('numero') ?? $escola->censo->numero }}" placeholder="Número da escola">
                        </div>

                        <div class="col s12 m2 input-field">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" id="complemento"
                                value="{{ old('complemento') ?? $escola->censo->complemento }}"
                                placeholder="Complemento da escola">
                        </div>

                        <div class="col s12 m2 input-field">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro"
                                value="{{ old('bairro') ?? $escola->censo->bairro }}" placeholder="Bairro da escola">
                        </div>

                        <div class="col s12 m3 input-field">
                            <label for="ponto_referencia">Ponto de referência</label>
                            <input type="text" name="ponto_referencia" id="ponto_referencia"
                                value="{{ old('ponto_referencia') ?? $escola->censo->ponto_referencia }}"
                                placeholder="Ponto de referência da escola">
                        </div>

                        <div class="col s12 m3 select-field">
                            <label for="estado" class="testando">Estado</label>
                            <estados-select componente="estado" name="estado"></estados-select>
                        </div>

                        <div class="col s12 m3 select-field">
                            <label for="cidade" class="testando">Cidade</label>
                            <cidades-select componente="estado" name="cidade"></cidades-select>
                        </div>

                        <div class="col s12 m3 select-field">
                            <label for="distrito" class="testando">Distrito</label>
                            <select name="distrito" id="distrito" class="browser-default" testando>
                                <option value="">Selecione</option>
                            </select>
                        </div>

                        <div class="col s12 m3 input-field">
                            <label for="cep" class="testando">CEP</label>
                            <input type="text" name="cep" id="cep" placeholder="Digite o CEP"
                                value="{{ old('cep') ?? $escola->censo->cep }}" testando>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <i class="material-icons left">business</i> Teste
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col s12 input-field">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 input-field right-align">
                        <a href="{{ url()->previous() }}" class="btn btn-small red accent-4">
                            <i class="material-icons left">arrow_back</i> Voltar
                        </a>

                        <button type="submit" class="btn btn-small green accent-4">
                            <i class="material-icons right">send</i> Confirmar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
