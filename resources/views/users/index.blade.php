@extends('adminlte::page')

@section('title', 'Quality-Shoes')

@section('content_header')

@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">
@endsection


@section('js')
    <script src="<?php echo asset('js/imprimir.js'); ?>"></script>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#usuarios').DataTable({
            autoWidth: false
        });
    </script>
@endsection

@section('content')

    <br>
    <div class="card text-dark">
        <div class="card-header  text-center">
            <h3><b>USUARIOS</b></h3>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('users.create') }}" class="btn btn-dark btb-sm"><i class="fas fa-user-plus"></i> Registrar
                Usuario</a>
            
        </div>


        <div class="card-body" style=" overflow-x: scroll">
            <div id="printableArea">
                
                

                <table class="table table-striped table-bordered shadow-lg mt-4" id="usuarios" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre usuario</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Contacto</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Correo electronico</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td><img src="{{ asset($user->foto) }}" width="50" height="50" /></td>
                                <td>{{ $user->genero }}</td>
                                <td>{{ $user->contacto }}</td>
                                <td>{{ $user->direccion }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->getRoleNames()[0] }}</td>
            </div>
            <td>
                <form action="{{ route('users.destroy', $user) }}" method="post">
                    <a class="btn btn-dark btn-sm" href="{{ route('users.show', $user) }}">
                        <i class="fas fa-id-card"></i> Ver</a>
                    <div style="padding-top: 0.50rem"></div>
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-dark btn-sm"><i
                            class="fas fa-user-edit"></i> Editar<a>
                            @csrf
                            @method('delete')

                            @can('editar usuario')
                            @endcan

                            <button style="margin-top: 0.50rem" onclick="return confirm('¿ESTÁ SEGURO DE BORRAR?')"
                                type="submit" value="Borrar" class="btn btn-danger btn-sm"><i class="fas fa-user-slash"></i>
                                Eliminar</button>
                            @can('eliminar usuario')
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
   
@endsection
