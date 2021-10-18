@extends('templates.escola')

@section('content')
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-apexcharts"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/home-card.css') }}">
    <div class="container-wb">
        <div class="row">
            <div class="col s12 m6 l3">
                <div class="z-depth-2 home-card blue-gradient">
                    <div class="result">
                        <div class="result-info center-align">
                            <span class="result-number">{{ $ativos }}</span>
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
                            <span class="result-number">{{ $transferidos }}</span>
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
                            <span class="result-number">{{ $desistentes }}</span>
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
                            <span class="result-number">{{ $falecidos }}</span>
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

    <div class="row z-depth-2">
        <div id="class" class="col s12 p-15">
            <label for="shift">Turno</label>
            <select name="shift" id="shift" class="browser-default">
                <option value="">Todos</option>
                <option value="1">Matutino</option>
                <option value="2">Vespertino</option>
                <option value="3">Noturno</option>
            </select>
            <stacked-bar-chart></stacked-bar-chart>
        </div>
    </div>
@endsection
