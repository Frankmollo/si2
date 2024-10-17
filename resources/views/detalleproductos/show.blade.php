<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width" />
    <!-- ETIQUETAS REFERENCIALES -->
    <meta name="description" content="Tienda Online">
    <meta name="keywords" content="tienda, compras, precio, ventas, ecomerce, comercio, online, store, TEM, tecnología">
    <!--<meta http-equiv="author" content="Abdias Alvarado">-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">
    <title>Quality-Store</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/bootstrap.min.css') }}" />

    <!-- Font Awesome Icon -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">

    <!-- Hoja de estilo personalizada -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/custom.css') }}" />


    <!-- home.css añadir imagenes de boton para inicio -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/home.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ asset('js/push.js') }}"></script>
    <script src="{{ asset('js/serverWorker.js') }}"></script>
    <script src="{{ asset('js/carrito2.js') }}"></script>

</head>

<body>
    <!-- HEADER -->
    <header>

        <div id="encabezado-superior">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=%2B59178416172&text=Mas%20informaci%C3%B3n&app_absent=0"><i
                                class="fa fa-phone"></i> +59178416172</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> QualityStore@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> direccion</a></li>
                </ul>

                <ul class="header-links pull-right">

                    @if (Auth::guest())

                        <li><a href="{{ route('login') }}"><i class="fa fa-user-o"></i>Iniciar</a></li>

                        <li><a href="{{ route('register') }}"><i class="fa fa-user-o"></i>Registrar</a></li>

                    @else
                        @can('Panel')
                            <li><a href="{{ route('productos.index') }}"><i class="fa fa-user-o"></i>Panel</a></li>
                        @endcan
                        <li class="nav-item">

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                {{ __('Cerrar Sesión') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>

                    @endif
                </ul>


            </div>
        </div>

        <div id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{ route('home') }}" class="logo">
                                <img src="{{ asset('img/icono.png') }}" alt="QualityStore" width="300px">
                                {{-- QualityStore&#174; --}}
                            </a>
                        </div>

                    </div>



                    <!-- USUARIO -->
                    <div class="header-ctn">
                        <!-- Notificacion -->
                        <div class="dropdown">
                            <a href="#" id="sendPushNotification">
                                <i class="far fa-bell"></i>
                                <span>Notificacion</span>
                            </a>
                        </div>
                        <!-- /Notificacion -->


                        <!-- /Carrito -->
                        <div class="cantidadProductos" id="cantidadProductos"></div>
                        <br>
                        <a type="button" data-toggle="modal" data-target="#dialogo1">
                            <i class="fa fa-shopping-cart" ></i>
                            <span>Carrito</span>
                        </a>
                        <div id="confirmacionCompra"></div>



                        <!-- Perfil -->
                        <div class="dropdown">
                            <a href="{{ route('perfil.index') }}">
                                <i class="far fa-user"></i>
                                <span>Perfil</span>
                            </a>
                        </div>

                        <!-- /Perfil -->
                    </div>

                    <!-- Modal Carrito -->
                    <div class="col align-self-center text-end pe-5">
                        <div class="modal fade" id="dialogo1" tabindex="-1" aria-labelledby="dialogo1ModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title col-11 text-center" id="dialogo1ModalLabel">
                                            Carrito de Compras
                                            <button type="button" class="close col-1" data-dismiss="modal"
                                                style="color:#ee2214;" aria-label="Close">X</button>
                                        </h4>
                                    </div>
                                    <div class="modal-body container ">
                                        <div id="listadoCarrito" class="text-center">
                                            <h4 class="modal-title col-11 text-center">Tu carrito está vacio.</h4>
                                        </div>
                                        <div id="listaCompras" class="row align-items-center justify-content-center">
                                            <div id="columnaImg" class="col-2 columnaImg text-start "></div>
                                            <div id="columnaProductos" class=" col-6 columnaProductos text-center ">
                                            </div>
                                            <div id="columnaCantidad" class=" col-2 columnaCantidad text-center "></div>
                                            <div id="columnaPrecio" class=" col-2 columnaPrecio text-end "></div>
                                        </div>
                                        <div id="sumaTotal"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Cerrar</button>
                                        <!--<button class="button">Vaciar
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                carrito</button>-->
                                        <a href="{{ route('carritos.index') }}" type="button" class="btn btn-warning"
                                            style="color:#fffff">Ir al
                                            Carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </header>
    <!-- /HEADER -->


    <nav id="navigation">
        <div class="container">
            <div id="responsive-nav">
                <ul class="main-nav nav navbar-nav">
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('catalogos.index') }}">Catalogo</a></li>
                    <!--<li><a href="#" id="sendPushNotification">Notificación</a></li>-->
                    <li><a href="{{ route('promocion.index') }}">Descuentos</a></li>
                    <li><a href="{{ route('compras.index') }}">Mis compras</a></li>
                    <li><a href="{{ route('contactos.index') }}">Contactos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO -->



    <div class="container">
        <div class="row">
            {{-- SLIDER --}}
            <div id="slider-wrapper2">
                <div class="inner-wrapper2">
                    <input checked type="radio" name="slide" class="control2" id="Slide1" />
                    <label for="Slide1" id="s1">.</label>
                    <input type="radio" name="slide" class="control2" id="Slide2" />
                    <label for="Slide2" id="s2">.</label>
                    <input type="radio" name="slide" class="control2" id="Slide3" />
                    <label for="Slide3" id="s3">.</label>
                    <input type="radio" name="slide" class="control2" id="Slide4" />
                    <label for="Slide4" id="s4">.</label>
                    <div class="overflow-wrapper2">
                        @php
                            $array = [];
                            $col = 'no';
                        @endphp
                        @foreach ($productoAll as $productos)
                            @if ($productos->codigo == $producto->codigo)
                                @if ($col != 'no')
                                    @php
                                        $col = $productos->color;
                                    @endphp
                                @endif
                                @if (!in_array($col, $array))
                                    @php
                                        $array[] = $productos->color;
                                        $col = $productos->color;
                                    @endphp
                                    <a class="slideA" href=""><img src="{{ $productos->foto }}" /></a>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- /SLIDER --}}


            {{-- CODIGO --}}
            <h4 class='prod-title'>Codigo : {{ $producto->codigo }}</h4>
            {{-- DESCRIPCION DEL PRODUCTO --}}
            <h4>Descripcion : {{ $producto->descripcion }}</h4>
            {{-- PRECIO --}}
            @foreach ($descuento as $descuentos)
                @if ($descuentos->id == $producto->id_descuento)
                    @php
                        $aux = $descuentos->monto;
                    @endphp
                @endif
            @endforeach

            @php
                $aux = $aux / 100;
                $final = $producto->precio * $aux;
            @endphp
            @if ($producto->precio != $producto->precio - $final)
                <h4 class="lbl-normal-price">Precio : {{ $producto->precio }} Bs</h4>
                <h4 class="product-price">Precio : {{ $producto->precio - $final }} bs </h4>
            @else
                <h4 class="lbl-normal-price">Precio : {{ $producto->precio }} Bs</h4>
            @endif
            {{-- DISPONIBLES --}}
            <h3>Disponibilidad</h3>
            @php
                $array = [];
                $col = 'no';
            @endphp
            @foreach ($productoAll as $productos)
                @if ($productos->codigo == $producto->codigo)
                    @if ($col != 'no')
                        @php
                            $col = $productos->color;
                        @endphp
                    @endif

                    @if (!in_array($col, $array))
                        @php
                            $array[] = $productos->color;
                            $col = $productos->color;
                        @endphp
                        <h4>{{ $productos->color }} : </h4>

                    @endif
                    <p>
                        @foreach ($talla as $tallas)
                            @if ($tallas->id == $productos->id_talla)
                                {{ $tallas->numero }}
                                {{-- TIENE QUE ENVIAR ESTE VALOR QUE ELIJA EL USER A CARRITO --}}
                            @endif
                        @endforeach
                    </p>
                @endif
            @endforeach

            {{-- COLORES --}}
            <h4>Color:</h4>
            <div class="custom-select" style="width:500px;">
                <select value="">
                    @php
                        $array = [];
                        $col = 'no';
                    @endphp
                    @foreach ($productoAll as $productos)
                        @if ($productos->codigo == $producto->codigo)
                            @if ($col != 'no')
                                @php
                                    $col = $productos->color;
                                @endphp
                            @endif

                            @if (!in_array($col, $array))
                                @php
                                    $array[] = $productos->color;
                                    $col = $productos->color;
                                @endphp
                                <option value="">
                                    {{ $productos->color }}
                                    {{-- TIENE QUE ENVIAR ESTE VALOR QUE ELIJA EL USER A CARRITO --}}
                                </option>
                            @endif
                        @endif
                    @endforeach
                </select>
            </div>

            {{-- TALLAS --}}
            <h4>Talla: </h4>
            <div class="custom-select" style="width:500px;">
                <select value="">
                    @foreach ($productoAll as $productos)
                        @if ($productos->codigo == $producto->codigo)
                            @foreach ($talla as $tallas)
                                @if ($tallas->id == $productos->id_talla)
                                    <option value="">
                                        {{ $tallas->numero }}
                                    </option>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </select>
            </div>
            {{-- AGREGAR A CARRITO --}}
            @foreach ($marca as $marcas)
                @if ($marcas->id == $producto->id_marca)
                    <button type="submit" href="#"
                        onclick="agregarCarrito({precio:'{{ $producto->precio - $final }}', marca:'{{ Auth::user()->id }} {{ $producto->descripcion }}', color:'{{ $producto->color }} {{ $producto->id }}', codigo:'#{{ $producto->codigo }}', nombre:'{{ $marcas->nombre }}', img:'{{ $producto->foto }}'});">
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                @endif
            @endforeach

        </div>

        <center>
            <button class="btn " style="background-color:#111010;color:#ffff" href="#"
                onclick="agregarCarrito({});">
                <i class="fa fa-shopping-cart"></i> Comprar</button>

            <button style="background-color:#f3753a;color:#ffff" class="btn btn-outline-dark" type="button"
                onclick="history.back()"></i> Volver</button>
        </center>
    </div>

    <!-- /product -->

    <!-- /Section -->

    <!-- CONTENIDO -->

    <center>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </center>


    </div>




    <!-- FOOTER -->
    <footer id="footer">
        <div id="paginacion">
            <span class="izquierda" type="button" onclick="history.back()" name="boton-personalizado-2"><a>&laquo;
                    Anterior </a></span>
            <span class="derecha"><a>Siguiente &raquo;</a></span>
        </div>
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Sobre Nosotros</h3>
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous"
                                                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0&appId=167466933725219&autoLogAppEvents=1"
                                                        nonce="DBvUnpJ9"></script>
                            <div class="fb-page"
                                data-href="https://www.facebook.com/Quality-Store-1999078610372910" data-tabs="timeline"
                                data-width="250" data-height="40" data-small-header="true"
                                data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/Quality-Store-1999078610372910"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/Quality-Store-1999078610372910">Quality
                                        Store</a>
                                </blockquote>
                            </div>
                            <br>
                            <p>Nos dedicamos a ofrecerte los mejores servicios</p>



                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>Ubicacion</a></li>
                                <li><a target="_blank"
                                        href="https://api.whatsapp.com/send/?phone=%2B59178416172&text=Mas%20informaci%C3%B3n&app_absent=0"><i
                                            class="fa fa-phone"></i>+59178416172</a></li>
                                <li><a href="mailto:QualityStore@gmail.com "><i class="fa fa-envelope-o"></i>
                                        QualityStore@gmail.com </a></li>



                                <div class="footer-social">
                                    <a target="_blank" href="https://www.facebook.com/Quality-Store-1999078610372910"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <!--<a href="#" ><i class="fa fa-pinterest"></i></a>-->
                                </div>
                            </ul>



                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categorías</h3>
                            <ul class="footer-links">
                                <li><a href="#">Fila</a></li>
                                <li><a href="">Promoción</a></li>
                                <li><a href="#">Novedades</a></li>
                                <li><a href="#">Nike</a></li>
                                <li><a href="#">Adidas</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Información</h3>
                            <ul class="footer-links">
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Contáctanos</a></li>
                                <li><a href="#">Políticas de Privacidad</a></li>
                                <li><a href="#">Términos y Condiciones</a></li>
                                <li>
                                    <a target="_blank" rel="license"
                                        href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Esta obra de
                                        Licencia
                                        <img alt="Licencia Creative Commons" style="border-width:0"
                                            src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" />
                                    </a>
                                </li>
                                <br>

                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                    <input type="hidden" name="cmd" value="_s-xclick" />
                                    <input type="hidden" name="hosted_button_id" value="Q94VEUTNSR2QW" />
                                    <input type="image"
                                        src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0"
                                        name="submit" title="PayPal - The safer, easier way to pay online!"
                                        alt="Donate with PayPal button" />
                                    <img alt="" border="0" src="https://www.paypal.com/en_BO/i/scr/pixel.gif" width="1"
                                        height="1" />
                                </form>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Clientes</h3>
                            <ul class="footer-links">
                                <li><a href="#">Mi Cuenta</a></li>
                                <li><a href="#">Ver servicio</a></li>
                                <li><a href="#">Ayuda</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <div id="bottom-footer" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span class="copyright">
                            Copyright &copy; 2021 Todos los derechos reservados. | QualityStore
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>



</body>

</html>
<script type="text/javascript">
    // Push.create('Hello World!');
    $(document).ready(function() {
        $('#sendPushNotification').on('click', function() {
            Push.create("Quality Store", {
                body: "“Las tendencias desaparecen, el estilo es eterno”",
                icon: '{{ asset('img/logo.jpg') }}',
                timeout: 40000,
                onClick: function() {
                    window.focus();
                    this.close();
                }
            });
        });
    });
</script>

{{-- Slider --}}

<style>
    #slider-wrapper2 {
        width: 400px;
        height: 250px;
        margin: 0px auto;
        position: relative;
        margin-bottom: 0px;
        overflow: hidden;
    }

    #s1 {
        padding: 6px;
        background: #000000;
        position: absolute;
        left: 50%;
        bottom: 25px;
        margin-left: -36px;
        border-radius: 20px;
        opacity: 0.3;
        cursor: pointer;
        z-index: 999;
    }

    #s2 {
        padding: 6px;
        background: #000000;
        position: absolute;
        left: 50%;
        bottom: 25px;
        margin-left: -12px;
        border-radius: 20px;
        opacity: 0.3;
        cursor: pointer;
        z-index: 999;
    }

    #s3 {
        padding: 6px;
        background: #000000;
        position: absolute;
        left: 50%;
        bottom: 25px;
        margin-left: 12px;
        border-radius: 20px;
        opacity: 0.3;
        cursor: pointer;
        z-index: 999;
    }

    #s4 {
        padding: 6px;
        background: #000000;
        position: absolute;
        left: 50%;
        bottom: 25px;
        margin-left: 36px;
        border-radius: 20px;
        opacity: 0.3;
        cursor: pointer;
        z-index: 999;
    }

    #s1:hover,
    #s2:hover,
    #s3:hover,
    #s4:hover {
        opacity: .50;
    }

    .inner-wrapper2 {
        width: 400px;
        height: 250px;
        position: absolute;
        top: 0;
        left: 0;
        margin-bottom: 0px;
        overflow: hidden;
    }

    .control2 {
        display: none;
    }

    #Slide1:checked~.overflow-wrapper2 {
        margin-left: 0%;
    }

    #Slide2:checked~.overflow-wrapper2 {
        margin-left: -100%;
    }

    #Slide3:checked~.overflow-wrapper2 {
        margin-left: -200%;
    }

    #Slide4:checked~.overflow-wrapper2 {
        margin-left: -300%;
    }

    #Slide1:checked+#s1 {
        opacity: 1;
    }

    #Slide2:checked+#s2 {
        opacity: 1;
    }

    #Slide3:checked+#s3 {
        opacity: 1;
    }

    #Slide4:checked+#s4 {
        opacity: 1;
    }

    .overflow-wrapper2 {
        width: 400%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        overflow-y: hidden;
        z-index: 1;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .slideA img {
        width: 25%;
        float: left;
        background: transparent;
    }

</style>
