@extends('templates.school')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-apexcharts"></script>
    <link rel="stylesheet" href="{{ asset('css/home-card.css') }}">
    <div class="container-wb">
        <div class="row">
            <div class="col s12 m6 l3">
                <div class="z-depth-2 home-card blue-gradient">
                    <div class="result">
                        <div class="result-info center-align">
                            <span class="result-number">{{ $active }}</span>
                            <div class="result-title">Ativos</div>
                        </div>
                        <div class="result-icon">
                            <i class="material-icons result-icon-i right">groups</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l3">
                <div class="z-depth-2 home-card green-gradient">
                    <div class="result">
                        <div class="result-info center-align">
                            <span class="result-number">{{ $transfer }}</span>
                            <div class="result-title">Transferidos</div>
                        </div>
                        <div class="result-icon">
                            <i class="material-icons result-icon-i right"
                                style="font-size: 100px; margin-top: 14px;">reduce_capacity</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l3">
                <div class="z-depth-2 home-card orange-gradient">
                    <div class="result">
                        <div class="result-info center-align">
                            <span class="result-number">{{ $quitter }}</span>
                            <div class="result-title">Desistentes</div>
                        </div>
                        <div class="result-icon">
                            <i class="material-icons result-icon-i right"
                                style="font-size: 100px; margin-top: 15px;">follow_the_signs</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l3">
                <div class="z-depth-2 home-card purple-gradient">
                    <div class="result">
                        <div class="result-info center-align">
                            <span class="result-number">{{ $deceased }}</span>
                            <div class="result-title">Falecidos</div>
                        </div>
                        <div class="result-icon">
                            <i class="material-icons result-icon-i right"
                                style="font-size: 115px;margin-top: 0px;">health_and_safety</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="z-depth-2">
        <div id="app">
            <example-component></example-component>
        </div>
        <div id="class" class="col s12"></div>
    </div>

    {{-- <script src="{{ asset('js/bar.js') }}"></script> --}}
@endsection
