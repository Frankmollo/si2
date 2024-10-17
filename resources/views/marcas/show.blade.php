@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')


@stop

@section('content')

<div class="container">
    <div class="row justify-content-center border rounded-top">
        <div class="col">
            {{-- datos --}}
            <div class="row border">
                <div class="col">
                    <div class="row">

                        <h3 class="font-weight-bold px-2">MARCA</h3>
                    </div>

                    <div class="row">
                        <h5 class="font-weight-bold px-2">Id Marca: </h5>
                        <h5>{{$marca->id}}</h5>
                    </div>
                    <div class="row">
                        <h5 class="font-weight-bold px-2">Descripcion: </h5>
                        <h5>{{$marca->nombre}}</h5>
                    </div>



                    <div class="row">
                        <a href="{{route('marcas.index')}}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop