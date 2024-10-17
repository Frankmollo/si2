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
            <h3><b>ROLES</b></h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('roles.create') }}" class="btn btn-dark"><i class="fas fa-clipboard-check"></i> Crear nuevo
                Rol</a>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4" id="roles" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre de Rol</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{ $rol->id }}</td>
                            <td>{{ $rol->name }}</td>
                            <td>

                                <form action="{{ url('/roles/' . $rol->id) }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <a href="{{ route('roles.edit', $rol) }}" class="btn btn-dark btn-sm"><i
                                            class="fas fa-edit"></i> Editar</a>

                                    @can('Editar rol')
                                    @endcan
                                    <div style="padding-top: 0.50rem"></div>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar"><i
                                            class="fas fa-trash-alt"></i> Eliminar</button>
                                    @can('Eliminar rol')
                                    @endcan
                                </form>

                            </td>

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
        $('#roles').DataTable({
            autoWidth: false
        });
    </script>
@endsection
