@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Editar descuento</h1>
@stop

@section('content')
    <form method="post" action="{{ route('descuentos.update', $descuento) }}">
        @csrf
        @method('PATCH')
        <div class="form-group col-md-3">
            <h5>Porcentaje:</h5>
            <!--<input type="text" name="monto" value="{{ $descuento->monto }}" class="focus border-dark  form-control">-->
            <select type="text" name="monto" class="focus border-dark  form-control" value="{{ $descuento->monto }}"
                required>
                <option value="0">0%</option>
                <option value="5">5%</option>
                <option value="10">10%</option>
                <option value="15">15%</option>
                <option value="20">20%</option>
                <option value="0">25%</option>
                <option value="30">30%</option>
                <option value="0">35%</option>
                <option value="40">40%</option>
                <option value="0">45%</option>
                <option value="50">50%</option>
                <option value="0">55%</option>
                <option value="60">60%</option>
                <option value="0">65%</option>
                <option value="70">70%</option>
                <option value="0">75%</option>
                <option value="80">80%</option>
                <option value="0">85%</option>
                <option value="90">90%</option>
                <option value="0">95%</option>
                <option value="100">100%</option>
            </select>
            @error('monto')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <br>
            <button type="submit" class="btn btn-dark">Guardar</button>
            <a class="btn btn-danger" href="{{ route('descuentos.index') }}">Volver</a>
        </div>
    </form>
@stop
