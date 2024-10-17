@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')

@stop

@section('content')

    <div>
        <div>
            {{-- datos --}}
            <div class="col">
                <div class="card-header">
                    <h2 class="font-weight-bold px-2">Cardex de Usuario</h2>
                </div>

                <br><br>
                <div class="row">
                    <h5 class="font-weight-bold px-2">Foto </h5>

                    <img src="{{ asset($user->foto) }}" width="200" height="200" />
                </div>
                <br>
                <br>
                <div class="row border">
                    <h5 class="font-weight-bold px-2">Nombre de usuario: </h5>
                    <h5>{{ $user->name }}</h5>
                </div>

                <div class="row border">
                    <h5 class="font-weight-bold px-2">Genero: </h5>
                    <h5>{{ $user->genero }}</h5>
                </div>
                <div class="row border">
                    <h5 class="font-weight-bold px-2">Contacto: </h5>
                    <h5>{{ $user->contacto }}</h5>
                </div>

                <div class="row border">
                    <h5 class="font-weight-bold px-2">Direccion: </h5>
                    <h5>{{ $user->direccion }}</h5>
                </div>

                <div class="row border">
                    <h5 class="font-weight-bold px-2">Correo electronico: </h5>
                    <h5>{{ $user->email }}</h5>
                </div>


                <br>
                <div class="row">
                    <a href="{{ route('users.index') }}" class="btn btn-danger">
                        Volver</a>
                </div>
            </div>
        </div>
    </div>
@stop
