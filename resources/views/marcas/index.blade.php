@extends('adminlte::page')

@section('title', 'Quality-Shoes')

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
            <h3><b>MARCAS</b></h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{-- @can('Modo Admin') --}}
            <a class="btn btn-dark" href="{{ route('marcas.create') }}"><i class="fas fa-copyright"></i> Registrar
                Marca</a>
            {{-- @endcan --}}
        </div>
        <div class="card-body table-responsive">
            <table class="table" id="marcas">
                <thead class="thead-dark">
                    <tr>
                        <th thead-light class="text-center">Id </th>
                        <th thead-light class="text-center">Marca</th>
                        {{-- @can('Modo Admin') --}}
                        <th thead-light class="text-center">Acciones</th>
                        {{-- @endcan --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marca as $marcas) {{-- hereeeeee --}}
                        <tr>
                            <td>
                                {{ $marcas->id }}
                            </td>
                            <td>
                                <center>{{ $marcas->nombre }}</center>
                            </td>
                            {{-- @can('Modo Admin') --}}
                            <td class="text-center">
                                <form action="{{ route('marcas.destroy', $marcas) }}" method="POST">
                                    <a class="btn btn-dark btn-sm" href="{{ route('marcas.show', $marcas) }}"><i
                                            class="fas fa-eye"></i> Ver</a>

                                    <a class="btn btn-dark btn-sm" href="{{ route('marcas.edit', $marcas) }}"><i
                                            class="fas fa-edit"></i> Editar</a>

                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" type="submit"
                                        value="Borrar" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
                                        Eliminar</button>

                                </form>
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
        $('#marcas').DataTable({
            autoWidth: false
        });
    </script>
@endsection
