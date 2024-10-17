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
        $('#productos').DataTable({
            autoWidth: false
        });
    </script>


@endsection

@section('content')

    <br>
    <div class="card text-dark">
        <div class="card-header  text-center">
            <h3><b>SUB-CATEGORIAS</b></h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{-- @can('Modo Admin') --}}
            <a class="btn btn-dark" href="{{ route('subcategorias.create') }}"><i class="fas fa-shoe-prints"></i> Registrar
                Sub Categoria</a>

            {{-- Boton imprimir- --}}
            
            {{-- Imprimir-- --}}
            {{-- @endcan --}}
        </div>

        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4" id="tallas">
                <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Categoria</th>
                        {{-- @can('Modo Admin') --}}
                       
                        {{-- @endcan --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subCategorias as $subCategoria) {{-- hereeeeee --}}
                        <tr>

                            <td class="text-center">{{ $subCategoria->id }}</td>
                            <td class="text-center">{{ $subCategoria->nombre }}</td>
                            <td class="text-center">{{ $subCategoria->categoria_id }}</td>
                            {{-- @can('Modo Admin') --}}
                            <td class="text-center">

                                <form action="{{ route('subcategorias.destroy', $subCategoria) }}" method="POST">
                                    <a class="btn btn-dark btn-sm" href="{{ route('subcategorias.edit', $subCategoria) }}"><i
                                            class="fas fa-edit"></i> Editar</a>

                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" type="submit"
                                        value="Borrar" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i>
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