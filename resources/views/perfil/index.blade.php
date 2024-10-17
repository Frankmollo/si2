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

    <title>Quality-Store</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ae6ae307e8.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/bootstrap.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">

    <!-- Hoja de estilo personalizada -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/custom.css') }}" />


    <!-- home.css añadir imagenes de boton para inicio -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/home.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ asset('js/push.js') }}"></script>
    <script src="{{ asset('js/serverWorker.js') }}"></script>

    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>


    <link rel="stylesheet" href="{{ asset('style/subir.css') }}">

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

                        <!-- Carrito -->
                        <div class="dropdown">
                            <a href="{{ route('carritos.index') }}">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Carrito</span>
                            </a>
                        </div>
                        <!-- /Carrito -->

                        <!-- Perfil -->
                        <div class="dropdown">
                            <a href="{{ route('perfil.index') }}">
                                <i class="far fa-user"></i>
                                <span>Perfil</span>
                            </a>
                        </div>
                        <!-- /Perfil -->
                    </div>
                </div>
            </div>


    </header>
    <!-- /HEADER -->


    <nav id="navigation">
        <div class="container">
            <div id="responsive-nav">
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
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
    <br><br>
    @php
        $user = Auth::user();
    @endphp

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-thumbnail border-0"
                                src="{{ Auth::user()->foto }}" alt="Ben">
                        </div>

                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                        <p class="text-muted text-center">
                            <span class="badge badge-dark">{{ Auth::user()->getRoleNames()[0] }}</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <h4>Perfil</h4>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <form action="{{ route('users.update', $user) }}" method="post" novalidate>
                                    @csrf
                                    @method('put')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nombre de usuario</label>
                                            <input type="text" name="name" class="focus border-dark form-control"
                                                value="{{ old('name', $user->name) }}" id="name" type="text" min="5"
                                                max="30" maxlength="30" size="0" pattern="{5,30}"
                                                placeholder="Nombre de usuario" required>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="activar-contraseña">Nueva contraseña</label>
                                            <input type="checkbox" name="activar-contraseña" id="check_password"
                                                onclick="cambiarEstado()">
                                            <input type="password" name="password"
                                                class="focus border-dark form-control" value="{{ old('password') }}"
                                                id="passwordInput" placeholder="Escriba la nueva contraseña">
                                            @error('password')
                                                <small>*{{ $message }}</small>
                                                <br><br>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">

                                        <div class="custom-input-file">
                                            <input type="file" id="file" accept="image/*" class="input-file"
                                                value="">
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
                                        <input type="hidden" value="{{ old('foto', $user->foto) }}" name="foto"
                                            id="fotov" title="foto" placeholder="https://example.com" list="defaultURLs"
                                            class="focus border-dark form-control" required
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
                                        <input name="contacto" type="tel" size="5" maxlength="18"
                                            pattern="[0-9-+()]{5,18}" placeholder="+591XXXXXXXXX" required
                                            class="focus border-dark form-control"
                                            value="{{ old('contacto', $user->contacto) }}" id="contacto" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="direccion">Direccion de hogar</label>
                                        <input type="text" minlength="1" maxlength="50" placeholder="Dirección" required
                                            name="direccion" class="focus border-dark form-control"
                                            value="{{ old('direccion', $user->direccion) }}" id="direccion" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">Correo electronico</label>
                                        <input type="email" name="email" class="focus border-dark form-control"
                                            placeholder="Correo" value="{{ old('email', $user->email) }}" id="email"
                                            required>
                                    </div>


                                    <br>

                                    <button class="btn btn-dark" type="submit">Actualizar Perfil</button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <br><br><br>
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
                                        href="https://www.facebook.com/Quality-Store-1999078610372910">Quality Store</a>
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
                                        href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Esta obra de Licencia
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
