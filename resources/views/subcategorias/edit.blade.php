@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Editar Datos De Marcas</h1>
@stop

@section('content')
    <form method="post" action="{{ route('subcategorias.update', $subCategoria->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group col-md-3">
            <h5>Nombres:</h5>
            <input type="text" name="nombre" value="{{ $subCategoria->nombre }}" class="focus border-dark  form-control" min="3"
                max="30" maxlength="30" size="0" placeholder="Nombre" required>
            @error('nombre')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <br>
            <h5>Categoria:</h5>
            <input type="number" name="categoria" class="focus border-dark  form-control" min="1" max="30" maxlength="30"
              size="0" placeholder="ID_CATEGORIA" required>
                    
            <br>
            <button type="submit" class="btn btn-dark"><i class="fas fa-pen-alt"></i> Guardar</button>
            <a class="btn btn-danger" href="{{ route('subcategorias.index') }}"><i class="fas fa-arrow-left"></i> Volver</a>
        </div>
    </form>
@stop
