@extends('adminlte::page')

@section('title', 'Quality-Store')


<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>
@section('content_header')
    <h1>Editar Usuario</h1>
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
            <form action="{{ route('users.update', $user) }}" method="post" novalidate>
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre de usuario</label>
                        <input type="text" name="name" class="focus border-dark form-control"
                            value="{{ old('name', $user->name) }}" id="name" type="text" min="5" max="30" maxlength="30"
                            size="0" pattern="{5,30}" placeholder="Nombre de usuario" required>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="activar-contraseña">Nueva contraseña</label>
                        <input type="checkbox" name="activar-contraseña" id="check_password" onclick="cambiarEstado()">
                        <input type="password" name="password" class="focus border-dark form-control"
                            value="{{ old('password') }}" id="passwordInput" placeholder="Escriba la nueva contraseña">
                        @error('password')
                            <small>*{{ $message }}</small>
                            <br><br>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="foto">Actual Foto</label>
                    <br>
                    <!--<img src="" alt="" id="foto">-->
                @section('js')
                    <script src="{{ asset('js/firebase.js') }}"></script>
                @endsection

                {{-- separador --}}
                <img height=100 width=100 src="{{ old('foto', $user->foto) }}">
                <br>
                <div class="custom-input-file">
                    <input type="file" id="file" accept="image/*" class="input-file" value="">
                    <i class="fas fa-file-upload"></i> Subir Foto...
                </div>
                <!--<input  type="url" value="" name="foto" id="foto" title="foto" placeholder="https://example.com" pattern="https?://.*" list="defaultURLs" class="focus border-primary  form-control" required oninvalid="this.setCustomValidity('Please match the requested format')" >-->
                @error('foto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <label for="foto">Ingrese una nueva Foto</label>
                <br>
                <progress id="progress_bar" value="0" max="100"></progress>
                <br>
                <input type="hidden" value="{{ old('foto', $user->foto) }}" name="foto" id="fotov" title="foto"
                    placeholder="https://example.com" list="defaultURLs" class="focus border-dark form-control" required
                    oninvalid="this.setCustomValidity('Please match the requested format')">

                <img height=100 width=100 id="foto" src="">
                @error('foto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-6">
                <label for="genero">Ingrese su genero</label>
                <select type="text" name="genero" class="focus border-dark form-control"
                    value="{{ old('genero', $user->genero) }}" id="genero" required>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Otros">Otros</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="contacto">Contacto</label>
                <input name="contacto" type="tel" size="5" maxlength="18" pattern="[0-9-+()]{5,18}"
                    placeholder="+591XXXXXXXXX" required class="focus border-dark form-control"
                    value="{{ old('contacto', $user->contacto) }}" id="contacto" required>
            </div>

            <div class="form-group col-md-6">
                <label for="direccion">Direccion de hogar</label>
                <input type="text" minlength="1" maxlength="50" placeholder="Dirección" required name="direccion"
                    class="focus border-dark form-control" value="{{ old('direccion', $user->direccion) }}"
                    id="direccion" required>
            </div>

            <div class="form-group col-md-6">
                <label for="email">Correo electronico</label>
                <input type="email" name="email" class="focus border-dark form-control" placeholder="Correo"
                    value="{{ old('email', $user->email) }}" id="email" required>
            </div>

            <div class="form-group col-md-6">
                <label for="roles">Seleccione un rol</label>
                <select name="roles" id="select-roles" class="focus border-dark form-control" onchange="habilitar()">
                    <option value="{{ old('roles', $rol->role_id) }}">{{ $rol_name->name }}</option>
                    @foreach ($roles as $rol)
                        <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                    @endforeach
                </select>
                @error('roles')
                    <small>*{{ $message }}</small>
                    <br><br>
                @enderror
            </div>

            <div>
                {{-- <label for="empleados">Seleccione un empleado</label>
                    <select name="empleados" class="form-control" id="select-empleados" disabled="" onchange="elegirE()" >
                        @if ($e > 0)
                            <option value="{{old('empleados' ,$empleado->id)}}">{{$empleado->nombre}}</option>                            
                        @else
                            <option value=0>Seleccione al empleado</option>                            
                        @endif
                            @foreach ($empleados as $empleado)
                                <option value="{{ $empleado->id }}">{{ $empleado->nombre}}</option>
                            @endforeach
                    </select>
                    @error('empleados')
                        <small>*{{$message}}</small>
                        <br><br>
                    @enderror --}}
            </div>
            <br>

            <button class="btn btn-dark" type="submit">Actualizar Usuario</button>
            <a class="btn btn-danger" href="{{ route('users.index') }}">Volver</a>
        </form>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', cargar, false);
    let checkP = document.getElementById('check_password');
    let contra = document.getElementById('passwordInput');

    function cambiarEstado() {
        if (contra.disabled == true) {
            contra.disabled = false
        } else {
            if (contra.disabled == false) {
                contra.disabled = true
                contra.value = ''
            }
        }
    }
    var rol = document.getElementById('select-roles');
    var empleados = document.getElementById('select-empleados');

    function cargar() {
        contra.disabled = true
        contra.value = ''
        empleados.disabled = false
    }

    function habilitar() {
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
