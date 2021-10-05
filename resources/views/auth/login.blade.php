@extends('templates.auth')

@section('content')
    <div class="container" style="width: 400px">
        <div class="row">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if (isset($errors) && count($errors))

                    There were {{ count($errors->all()) }} Error(s)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                @endif

                <div class="col s12 center-align">
                    <img src="{{ asset('images/logo.png') }}" alt="logo">
                </div>
                <div class="input-field col s12">
                    <label for="user" class="required">Usuário</label>
                    <input id="user" type="text" name="user" placeholder="Digite seu usuário" required />
                </div>

                <div class="input-field col s12">
                    <label for="password" class="required">Senha</label>
                    <input id="password" type="password" name="password" placeholder="Digite sua senha" required />
                </div>

                <div class="select-field col s12">
                    <label for="period">Ano letivo</label>
                    <select name="period" id="period" class="browser-default" required>
                        @for ($i = 2020; $i <= date('Y'); $i++)
                            <option value="{{ $i }}" {{ $i == date('Y') ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="input-field col s12">
                    <button type="submit" class="btn btn-small blue accent-4 w-100">Entrar
                    </button>
                </div>

                <div class="input-field col s12">
                    <a href="{{ route('password.request') }}">
                        Esqueceu sua senha?
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
