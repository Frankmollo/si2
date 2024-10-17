@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
    <h1>Registrar Productos</h1>

@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style/subir.css') }}">
@stop
@section('content')
    <div class="card">
        <div class="card-body shadow-lg">

            @error('codigo')
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>¡Error!</strong> Este producto ya está registrado.
                </div>
            @enderror
            <form method="post" action="{{ route('productos.store') }}" enctype="multipart/form-data">
                @csrf {{-- token --}}
                <div class="form-group col-md-3">
                    <h5>codigo :</h5>
                    <input type="text" name="codigo" class="focus border-dark  form-control" min="3" max="10" maxlength="10"
                        placeholder="codigo" required>
                    @error('codigo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- separador --}}
                {{--
                <div class="form-group col-md-3">
                    <h5>Color:</h5>
                    <input type="text" name="color" class="focus border-dark  form-control" min="3" max="10" maxlength="10"
                        size="0" pattern="[a-zA-Z]{3,10}" placeholder="Color" required>
                    @error('color')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                --}}
                {{-- separador --}}
                <div class="form-group col-md-3">
                    <h5>Precio:</h5>
                    <input type="text" name="precio" class="focus border-dark  form-control" min="1" max="4" maxlength="4"
                        size="0" pattern="[0-9]{1,4}" placeholder="Precio" required>
                    @error('precio')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- separador --}}
                <div class="form-group col-md-3">
                    <h5>Descripcion:</h5>
                    <input type="text" name="descripcion" class="focus border-dark  form-control" min="5" max="20"
                        maxlength="20" size="0" pattern="{5,20}" placeholder="Descripcion" required>
                    @error('descripcion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- separador --}}

                <div class="form-group col-md-3">
                    <h5>Cantidad Inicial:</h5>
                    <select name="id_inventario" class="focus border-dark  form-control">
                        @foreach ($inventario as $inventarios)
                            <option value={{ $inventarios->id }}>{{ $inventarios->cant_inicial }}</option>
                            <option value={{ $inventarios->id }}>{{ $inventarios->cant_disponible }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <h5>Marca:</h5>
                    <select name="id_marca" class="focus border-dark  form-control">
                        @foreach ($marca as $marcas)
                            <option value={{ $marcas->id }}>{{ $marcas->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                {{--
                <div class="form-group col-md-3">
                    <h5>Descuento:</h5>
                    <select name="id_descuento" class="focus border-dark  form-control">
                        @foreach ($descuento as $descuentos)
                            <option value={{ $descuentos->id }}>{{ $descuentos->monto }}</option>
                        @endforeach
                    </select>
                </div>
                --}}
                {{--
                <div class="form-group col-md-3">
                    <h5>Talla:</h5>
                    <select name="id_talla" class="focus border-dark  form-control">
                        @foreach ($talla as $tallas)
                            <option value={{ $tallas->id }}>{{ $tallas->numero }}</option>
                        @endforeach
                    </select>
                </div>
                --}}


                <!--<img src="" alt="" id="foto">-->
            @section('js')
                <script src="{{ asset('js/firebase.js') }}"></script>
            @endsection
            {{-- separador --}}
            <div class="form-group col-md-3">
                <h5>Foto:</h5>
                <div class="custom-input-file">
                    <input type="file" id="file" accept="image/*" class="input-file" value="">
                    <i class="fas fa-file-upload"></i> Subir Foto...
                </div>

                <div class="col-12" id="app" style="text-align:center;">
                    <progress id="progress_bar" value="0" max="100"></progress>
                    <img height=200 width=200 id="foto" src="" onerror="this.style.display='none'">
                    <img height=200 width=200 data-value="" class="codigo" id="contenedor" />
                </div>

                <input type="hidden" value="" name="foto" id="fotov" title="foto" placeholder="https://example.com"
                    list="defaultURLs" class="focus border-dark  form-control" required
                    oninvalid="this.setCustomValidity('Please match the requested format')">
                <!--<input  type="url" value="" name="foto" id="foto" title="foto" placeholder="https://example.com" pattern="https?://.*" list="defaultURLs" class="focus border-primary  form-control" required oninvalid="this.setCustomValidity('Please match the requested format')" >-->

                @error('foto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <button class="btn btn-dark" type="submit">Registrar</button>
            <a class="btn btn-danger" href="{{ route('productos.index') }}">Volver</a>
        </form>
    </div>


@stop
