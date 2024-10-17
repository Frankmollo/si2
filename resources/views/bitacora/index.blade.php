@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
@stop
@section('js')
    <script src="<?php echo asset('js/imprimir.js'); ?>"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">
@endsection

@section('content')

    <br>
    <div class="card text-dark">
        <div class="card-header  text-center">
            <h3><b>BITÁCORA</b></h3>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body table-responsive">
            <div id="printableArea">
                
                <table class="table table-striped table-bordered shadow-lg mt-4" id="bitacora" style="width:100%">
                    <thead>

                        <tr>

                            <th scope="col">USUARIO</th>
                            <th scope="col">ACCIÓN</th>
                            <th scope="col">GESTION</th>
                            <th scope="col">ID IMPLICADO</th>
                            <th scope="col">FECHA</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach ($actividades as $actividad)
                            <tr>

                                <td>{{ $actividad->name }}</td>
                                <td>{{ $actividad->description }}</td>
                                <td>{{ $actividad->log_name }}</td>
                                <td>{{ $actividad->subject_id }}</td>
                                {{-- @foreach ($user as $users)
                            
                            @endforeach --}}
                                <td>{{ $actividad->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
            </div>
            </table>

        </div>
    </div>
@stop


@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#bitacora').DataTable({
            autoWidth: false
        });
    </script>
@endsection
