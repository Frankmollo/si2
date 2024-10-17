@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')

@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

    <br>
    <div class="card text-dark">
        <div class="card-header  text-center">
            <h3><b>DESCUENTOS</b></h3>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            {{-- @can('Modo Admin') --}}
            <a class="btn btn-dark" href="{{ route('descuentos.create') }}"><i class="fas fa-percent"></i> Registrar
                descuento</a>
            {{-- @endcan --}}
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4" id="descuentos">
                <thead>
                    <tr>
                        <th>
                            <center>Id</center>
                        </th>
                        <th>
                            <center>Porcentaje de descuento</center>
                        </th>
                        {{-- @can('Modo Admin') --}}
                        <th>
                            <center>Acciones</center>
                        </th>
                        {{-- @endcan --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($descuento as $descuentos) {{-- hereeeeee --}}
                        <tr>
                            <td>
                                <center>{{ $descuentos->id }}</center>
                            </td>
                            <td>
                                <center>{{ $descuentos->monto }} %</center>
                            </td>
                            {{-- @can('Modo Admin') --}}
                            <td>
                                <center>
                                    <form action="{{ route('descuentos.destroy', $descuentos) }}" method="POST">

                                        <a class="btn btn-dark btn-sm"
                                            href="{{ route('descuentos.edit', $descuentos) }}"><i
                                                class="fas fa-edit"></i> Editar</a>
                                        @csrf
                                        @method('delete')

                                        <button onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" type="submit"
                                            value="Borrar" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
                                            Eliminar</button>
                                    </form>
                                </center>

                            </td>
                            {{-- @endcan --}}
                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#descuentos').DataTable({
            autoWidth: false
        });
    </script>
@endsection
