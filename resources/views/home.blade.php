{{-- NOTA KARLA:
    EXTENDS SON DIRECTIVAS DE BLADE --}}
@extends('adminlte::page')

@section('title', 'Micro-Mercado')
@section('content_header')


    <h1>

        <center>Menu de Inicio</center>
    </h1>

@stop

{{-- NOTA KARLA:
    CONTENT ES EL NOMBRE QUE SE DEFINIO EN --}}
@section('content') {{-- se especifica a que section se esta haciendo referencia --}}

    @can('Gestionar Productos')
        <p>
            <center>Bienvenido al panel de administrador.
            </center>
        <p>
        <div class="card">
            @foreach ($notaventa as $notaventas)
                @php
                    $numventas = 0;
                    $record = 0;
                    $rax = 0;
                @endphp
                @foreach ($detalleventa as $detalleventas)
                    @if ($detalleventas->id_notaventa == $notaventas->id)
                        @foreach ($user as $users)
                            @if ($notaventas->id_vendedor == $users->id)
                                @php
                                    $nom = $notaventas->id;
                                    $numventas = $numventas + 1;
                                    $datos123[$nom]['nombre'] = $users->name;
                                    $datos123[$nom]['ventas'] = $numventas;
                                    $datos123[$nom]['monto'] = $notaventas->monto_total;
                                    $datos123[$nom]['cant'] = $rax + $detalleventas->cantidad;
                                    $rax = $datos123[$nom]['cant'];
                                @endphp

                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endforeach


            @for ($i = 0; $i < 3; $i++)
                @php
                    $win = 0;
                    $monto_t = 0;
                    $cant = 0;
                    $winvendedor = '';
                    $winnombre = '';
                    foreach ($datos123 as $key => $value) {
                        if ($datos123[$key]['monto'] > $monto_t) {
                            $win = $datos123[$key]['ventas'];
                            $monto_t = $datos123[$key]['monto'];
                            $cant = $datos123[$key]['cant'];
                            $winvendedor = $key;
                            $winnombre = $datos123[$key]['nombre'];
                        }
                    }
                    unset($datos123[$winvendedor]);
                    $record = $record + 1;
                @endphp
                @if ($winvendedor != '')
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {
                            'packages': ['bar']
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([

                                ['Datos', 'Productos:{{ $win }}', 'Cantidad:{{ $cant }}',
                                    'Monto:{{ $monto_t }}.bs'
                                ],
                                ['{{ $winnombre }}', {{ $record }}, {{ $win }}, {{ $cant }}],


                            ]);

                            var options = {
                                chart: {
                                    title: 'RECORD DE MEJOR VENDEDOR',
                                    subtitle: 'Vendedor y Monto',
                                }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>
                @endif
            @endfor
            <div id="columnchart_material" style="width: 400px; height: 300px;"></div>
        </div>




    @endcan
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop
@section('js')
    <script src="asset('js/app.js')"></script>
    <script src="asset('js/grafica.js')"></script>
@stop
