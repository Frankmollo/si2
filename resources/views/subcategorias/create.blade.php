@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Registrar Categoria</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body shadow-lg">
            <form method="post" action="{{ route('subcategorias.store') }}">
                @csrf
                <div class="form-group col-md-3">
                    <h5>Nombre:</h5>
                    <input type="text" name="nombre" class="focus border-dark  form-control" min="3" max="30" maxlength="30"
                        size="0" placeholder="Nombre" required>
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <br>
                    <h5>Categoria:</h5>
                    <input type="number" name="categoria" class="focus border-dark  form-control" min="1" max="30" maxlength="30"
                        size="0" placeholder="ID_CATEGORIA" required>
                    
                    <br>
                    <button class="btn btn-dark" type="submit">Registrar</button>
                    <a class="btn btn-danger" href="{{ route('subcategorias.index') }}"><i class="fas fa-arrow-left"></i>
                        Volver</a>
                </div>
            </form>
        </div>
    </div>
@stop
