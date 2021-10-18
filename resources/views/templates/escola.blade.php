<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>e-School</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="grey darken-4">
            <a href="#" style="display: block;" data-target="slide-out" class="sidenav-trigger"><i class="material-icons"
                    style="font-size: 40px;">menu</i>
            </a>
        </nav>

        <ul id="slide-out" class="sidenav collapsible">
            <li>
                <div class="user-view background row">
                    <div class="w-100">
                        <img class="circle display-center" src="{{ asset('images/default.jpg') }}">
                    </div>

                    <div class="col s12 center-align"><span class="white-text name">John Doe</span></div>
                    <div class="col s12 center-align"><span class="white-text email">jdandturk@gmail.com</span></div>
                </div>
            </li>
            <li>
                <a href="{{ route('escola.home') }}"><i class="material-icons">home</i>Home</a>
            </li>
            <li>
                <div class="divider"></div>
            </li>

            <li>
                <div class="collapsible-header side waves-effect waves-default">
                    <i class="material-icons">school</i>Cadastros
                </div>

                <div class="collapsible-body">
                    <ul>
                        <li><a href="#!">Alunos</a></li>
                        <li><a href="#!">Funcionários</a></li>
                        <li><a href="#!">Turmas</a></li>
                        <li><a href="#!">Escola</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="{{ route('logout') }}"><i class="material-icons">logout</i>Sair</a>
            </li>
        </ul>

    </header>

    <main id="app">
        <div id="divisor" class="z-depth-2"></div>
        @yield('content')
    </main>

    @include('templates.footer')

    @stack('js')

    <script>
        $(document).ready(function() {
            $('select.browser-default').multipleSelect({
                placeholder: 'Selecione',
                filter: true,
                formatSelectAll: function() {
                    return "[Selecionar Todos]";
                },
                formatAllSelected: function() {
                    return "[Todos]";
                },
                formatCountSelected: function(count, total) {
                    return count + ' de ' + total + ' selecionados';
                }
            });

            $('.sidenav').sidenav();
            $('.collapsible').collapsible();
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
