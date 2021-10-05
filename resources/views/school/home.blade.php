@extends('templates.school')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/home-card.css') }}">
    <div class="container-wb">
        <div class="row">
            <div class="col s12 m3">
                <div class="z-depth-2 home-card blue-gradient">
                    <div class="result">
                        <div>
                            123
                            <div class="result-title">Ativos</div>
                        </div>
                        <i class="material-icons right">groups</i>
                    </div>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="z-depth-2 home-card green-gradient">

                </div>
            </div>

            <div class="col s12 m3">
                <div class="z-depth-2 home-card orange-gradient">

                </div>
            </div>

            <div class="col s12 m3">
                <div class="z-depth-2 home-card purple-gradient">

                </div>
            </div>
        </div>
    </div>
@endsection
