@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>
    <h1>Registrar Usuario</h1>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style/subir.css') }}">
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            @error('name')
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>¡Error!</strong> Este usuario ya está registrado.
                </div>

            @enderror
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <label for="name">Ingrese el nombre de usuario</label>
                <input type="text" min="5" max="30" maxlength="30" size="0" pattern="{5,30}" placeholder="Nombre de usuario"
                    name="name" class="focus border-dark  form-control form-group col-md-3" value="_" required>
                <br>


                <label for="foto">Ingrese una foto</label>
                <!--<img src="" alt="" id="foto">-->
            @section('js')
                <script src="{{ asset('js/firebase.js') }}"></script>
            @endsection

            {{-- separador --}}
            <div class="form-group col-md-3">
                <div class="custom-input-file">
                    <input type="file" id="file" accept="image/*" class="input-file" value="">
                    <i class="fas fa-file-upload"></i> Subir Foto...
                </div>
                <div class="col-12" id="app" style="text-align:center;">

                    <progress id="progress_bar" value="0" max="100"></progress>
                    <br><img height=200 width=215 id="foto" src="">
                    <input type="hidden" value="" name="foto" id="fotov" title="foto" placeholder="https://example.com"
                        list="defaultURLs" class="focus border-dark  form-control" required
                        oninvalid="this.setCustomValidity('Please match the requested format')">
                    <!--<input  type="url" value="" name="foto" id="foto" title="foto" placeholder="https://example.com" pattern="https?://.*" list="defaultURLs" class="focus border-primary  form-control" required oninvalid="this.setCustomValidity('Please match the requested format')" >-->
                </div>
                @error('foto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <label for="genero">Ingrese su genero</label>
            <select type="text" name="genero" class="focus border-dark  form-control form-group col-md-3"
                value="{{ old('genero') }}" required>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
                <option value="Otros">Otros</option>
            </select>
            <!--
            <label for="genero">Ingrese su genero</label>
            <input type="text" name="genero" class="focus border-dark  form-control form-group col-md-3"
                value="{{ old('genero') }}" required>
            @error('genero')                                                                     <br><br>
            @enderror
-->

            <label for="contacto">Ingrese su numero de contacto</label>
            <input name="contacto" type="tel" size="5" maxlength="18" pattern="[0-9-+()]{5,18}"
                placeholder="+591XXXXXXXXX" required class="focus border-dark  form-control form-group col-md-3"
                value="{{ old('contacto') }}" required>
            @error('contacto')
                <small>*{{ $message }}</small>
                <br><br>
            @enderror


            <label for="direccion">Ingrese su direccion de hogar</label>
            <input type="text" minlength="1" maxlength="50" placeholder="Dirección" required name="direccion"
                class="focus border-dark  form-control form-group col-md-3" value="{{ old('direccion') }}" required>
            @error('direccion')
                <small>*{{ $message }}</small>
                <br><br>
            @enderror


            <label for="email">Ingrese el correo electronico</label>
            <input type="email" name="email" placeholder="Correo"
                class="focus border-dark  form-control form-group col-md-3" value="{{ old('email') }}" required>
            @error('email')
                <small>*{{ $message }}</small>
                <br><br>
            @enderror


            <label for="password">Ingrese la contraseña</label>
            <input type="password" name="password" placeholder="Contraseña"
                class="focus border-dark  form-control form-group col-md-3" value="{{ old('password') }}" required>
            @error('password')
                <small>*{{ $message }}</small>
                <br><br>
            @enderror


            <div>
                <label for="roles">Seleccione un rol</label>
                <select name="roles" id="select-roles" class="focus border-dark  form-control form-group col-md-3"
                    onchange="habilitar()">
                    @foreach ($roles as $rol)
                        <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                    @endforeach
                </select>
                @error('roles')
                    <small>*{{ $message }}</small>
                    <br><br>
                @enderror
                <br>
            </div>
            <br>

            <button class="btn btn-danger btn-sm" type="submit">Crear Usuario</button>
            <a class="btn btn-dark btn-sm" href="{{ route('users.index') }}">Volver</a>
        </form>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', cargar, false);
    var rol = document.getElementById('select-roles');
    var empleados = document.getElementById('select-empleados');

    function habilitar() {
        if (rol.value > 0) {
            empleados.disabled = false
        } else {
            empleados.disabled = true
            empleados.value = 0
        }
    }

    function cargar() {
        if (rol.value > 0) {
            empleados.disabled = false
        } else {
            empleados.disabled = true
            empleados.value = 0
        }
    }
    /* function elegirE(){
        if(odontologos.value > 0){
            odontologos.disabled = false
        }
    } */
</script>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
