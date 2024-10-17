@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Registrar Inventario</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body shadow-lg">
        <form method="post" action="{{ route('inventarios.store') }}" enctype="multipart/form-data">
                @csrf {{-- token --}}
                <div class="form-group col-md-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Nombre del producto" required>
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group col-md-3">
                    <h5>Categoria :</h5>
                    <input type="text" name="categoria_id" class="focus border-dark  form-control" min="3" max="10" maxlength="10"
                        placeholder="Categoria" required>
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <h5>Producto :</h5>
                    <input type="text" name="producto_id" class="focus border-dark  form-control" min="3" max="10" maxlength="10"
                        placeholder="Producto" required>
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- separador --}}

                
                <div class="form-group col-md-3">
                    <h5>Sucursal:</h5>
                    <input type="text" name="sucursal_id" class="focus border-dark  form-control" min="1" max="4" maxlength="4"
                        size="0" pattern="[0-9]{1,4}" placeholder="Sucursal" required>
                    @error('sucursal')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- separador --}}

                    <br>
                    <button class="btn btn-dark" type="submit">Registrar</button>
                    <a class="btn btn-danger" href="{{ route('inventarios.index') }}"><i class="fas fa-arrow-left"></i>
                        Volver</a>
                </div>
        </div>
    </div>
@stop
