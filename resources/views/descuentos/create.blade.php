@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>descuentos</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body shadow-lg">
            <form method="post" action="{{ route('descuentos.store') }}">
                @csrf
                <div class="form-group col-md-3">
                    <h5>Porcentaje:</h5>
                    <!--<input type="text" name="monto" class="focus border-dark  form-control" min="1" max="3" maxlength="3"
                                                    size="0" pattern="[0-9]{1,3}" placeholder="Precio" required>-->
                    <select type="text" name="monto" class="focus border-dark  form-control" value="0" required>
                        <option value="0">0%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                        <option value="40">40%</option>
                        <option value="50">50%</option>
                        <option value="60">60%</option>
                        <option value="70">70%</option>
                        <option value="80">80%</option>
                        <option value="90">90%</option>
                        <option value="100">100%</option>
                    </select>
                    @error('monto')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <br>
                    <button class="btn btn-dark" type="submit">Registrar</button>
                    <a class="btn btn-danger" href="{{ route('descuentos.index') }}">Volver</a>
                </div>
            </form>
        </div>
    </div>
@stop
