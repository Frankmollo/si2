@extends('adminlte::page')

@section('title', 'Quality-Store')
@section('content_header')
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>

    <h1>Editar Productos</h1>

@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style/subir.css') }}">
@stop

@section('content_header')
    <h1>Editar Datos de Productos</h1>
@stop

@section('content')

    @error('descripcion')
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Error!</strong> Este producto ya está registrado.
        </div>
    @enderror


    <form method="post" action="{{ route('productos.update', $producto) }}">
        @csrf
        @method('PATCH')
        <div class="form-group col-md-3">
            <h5>Codigo:</h5>
            <input type="text" name="codigo" value="{{ $producto->codigo }}" class="focus border-dark  form-control"
                min="3" max="10" maxlength="10" placeholder="Codigo" required>
        </div>

        <div class="form-group col-md-3">
            <h5>Color:</h5>
            <input type="text" name="color" value="{{ $producto->color }}" class="focus border-dark  form-control" min="3"
                max="10" maxlength="10" size="0" pattern="[a-zA-Z]{3,10}" placeholder="Color" required>
            @error('color')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-md-3">
            <h5>Precio:</h5>
            <input type="text" name="precio" value="{{ $producto->precio }}" class="focus border-dark  form-control"
                min="1" max="5" maxlength="4" size="0" pattern="[0-9]{1,4}" placeholder="Precio" required>
            @error('precio')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-md-3">
            <h5>Descripcion:</h5>
            <input type="text" name="descripcion" value="{{ $producto->descripcion }}"
                class="focus border-dark  form-control" min="5" max="20" maxlength="20" size="0" pattern="{5,20}"
                placeholder="Descripcion" required>
            @error('descripcion')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>



        <div class="form-group col-md-3">
            <h5>Nombre de la inventario:</h5>
            <select name="id_inventario" class="focus border-dark  form-control">
                @foreach ($inventario as $inventarios)
                    @if ($producto->id_inventario == $inventarios->id)
                        {{-- ZZ <option value="{{$modelo->Id_marca}}">{{$modelo->Id_marca}}</option> XX --}}
                        <option value={{ $inventarios->id }}>{{ $inventarios->cant_disponible }}</option>
                    @endif

                @endforeach
                @foreach ($inventario as $inventarios)
                    @if ($producto->id_inventario != $inventarios->id)
                        <option value={{ $inventarios->id }}>{{ $inventarios->cant_disponible }}</option>
                    @endif

                @endforeach


            </select>
        </div>

        <div class="form-group col-md-3">
            <h5>Marca:</h5>
            <select name="id_marca" class="focus border-dark  form-control">
                @foreach ($marca as $marcas)
                    @if ($producto->id_marca == $marcas->id)
                        {{-- ZZ <option value="{{$producto->id_marca}}">{{$producto->id_marca}}</option> XX --}}
                        <option value={{ $marcas->id }}>{{ $marcas->nombre }}</option>
                    @endif

                @endforeach
                @foreach ($marca as $marcas)
                    @if ($producto->id_marca != $marcas->id)
                        <option value={{ $marcas->id }}>{{ $marcas->nombre }}</option>
                    @endif

                @endforeach
            </select>
        </div>

        <div class="form-group col-md-3">
            <h5>Descuento:</h5>
            <select name="id_descuento" class="focus border-dark  form-control">
                @foreach ($descuento as $descuentos)
                    @if ($producto->id_descuento == $descuentos->id)
                        <option value={{ $descuentos->id }}>{{ $descuentos->monto }}</option>
                    @endif

                @endforeach
                @foreach ($descuento as $descuentos)
                    @if ($producto->id_descuento != $descuentos->id)
                        <option value={{ $descuentos->id }}>{{ $descuentos->monto }}</option>
                    @endif

                @endforeach
            </select>
        </div>

        <div class="form-group col-md-3">
            <h5>Talla:</h5>
            <select name="id_talla" class="focus border-dark  form-control">
                @foreach ($talla as $tallas)
                    @if ($producto->id_talla == $tallas->id)
                        <option value={{ $tallas->id }}>{{ $tallas->numero }}</option>
                    @endif

                @endforeach
                @foreach ($talla as $tallas)
                    @if ($producto->id_talla != $tallas->id)
                        <option value={{ $tallas->id }}>{{ $tallas->numero }}</option>
                    @endif

                @endforeach
            </select>
        </div>

        {{-- separador --}}
        <div class="form-group col-md-3">

        @section('js')
            <script src="{{ asset('js/firebase.js') }}"></script>
        @endsection

        <h5>Foto:</h5>
        <div class="custom-input-file">
            <input type="file" id="file" accept="image/*" class="input-file" value="">
            <i class="fas fa-file-upload"></i> Subir Foto...
        </div>

        <br>
        <div class="col-12" id="app" style="text-align:center;">
            <img height=150 width=235 src="{{ $producto->foto }}" onerror="this.style.display='none'">
            <img height=150 width=235 data-value="{{ $producto->codigo }}" class="codigo" id="contenedor" />
            <progress id="progress_bar" value="0" max="100"></progress>
        </div>
        @error('foto')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <input type="hidden" value="" name="foto" id="fotov" title="foto" placeholder="https://example.com"
            list="defaultURLs" class="focus border-dark  form-control" required
            oninvalid="this.setCustomValidity('Please match the requested format')">
        <!--<input  type="url" value="" name="foto" id="foto" title="foto" placeholder="https://example.com" pattern="https?://.*" list="defaultURLs" class="focus border-primary  form-control" required oninvalid="this.setCustomValidity('Please match the requested format')" >-->


        Nueva Foto
        <div class="col-12" id="app" style="text-align:center;">
            <img height=150 width=235 id="foto" src="">
            @error('foto')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <!--
    <datalist id="defaultURLs" id="foto" name="foto">
        <option label="Fadidas-yeezy.png"
            value="https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidas-yeezy.png?alt=media&token=8d0c9df1-e0f9-420f-834b-4d64cc7e5661">
        <option label="puma-brothel.png"
            value="https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fpuma-brothel.png?alt=media&token=cfdfcd4f-93ea-420d-8b35-208cffd8a9bb">
        <option label="zapato4.png"
            value="https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fshoes-nike.png?alt=media&token=991235f2-3a5b-4232-ac8a-f9bf253a2ccf">
        <option label="zapato3.png"
            value="https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fzapato4.png?alt=media&token=fa821903-eb09-4cb2-beb6-a599b33dca44">
        <option label="zapato2.png"
            value="https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fzapato3.png?alt=media&token=06b5c6be-ef82-40e0-8e7a-34d3dea9bae7">
        <option label="adidas-yeezy2.png"
            value="https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fzapato2.png?alt=media&token=9681a37e-bebe-44fa-90e4-cb7fa6045966">
        <option label="imagen.png"
            value="https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fzapato.png?alt=media&token=524a92a8-2a34-425c-8364-ea490ccbd67f">
        <option label="shoes-nike.png"
            value="https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fimagen.png?alt=media&token=02e8c687-a41f-4e94-93a8-295844cbef4c">
        <option label="zapato2.png"
            value="https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidas-yeezy2.png?alt=media&token=ace50192-583f-4c60-b79f-52048c30a3e3">
    </datalist>
-->
    <br>
    <button type="submit" class="btn btn-dark">Guardar</button>
    <a class="btn btn-danger" href="{{ route('productos.index') }}">Volver</a>
    <br>
    <br>
    <br>
</form>





<script>
    const productos = [{
        nombre: "zapato",
        precio: 20,
        codigo: "123",
    }];

    const $contenedor = document.querySelector("#contenedor");

    // Por cada producto, crear un SVG y adjuntarlo

    productos.forEach(producto => {
        const elemento = document.createElement("img");
        elemento.dataset.format = "CODE128";
        elemento.dataset.value = producto.codigo;
        elemento.dataset.text = producto.nombre + " " + producto.precio.toFixed(2);
        elemento.classList.add("codigo");
        $contenedor.appendChild(elemento);
    });
    // Al final, inicializamos
    JsBarcode(".codigo").init();
</script>
@stop
