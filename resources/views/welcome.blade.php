<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width" />
    <!-- ETIQUETAS REFERENCIALES -->
    <meta name="description" content="Tienda Online">
    <meta name="keywords" content="tienda, compras, precio, ventas, ecomerce, comercio, online, store, TEM, tecnología">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">
    <title>Micro-Mercado</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/bootstrap.min.css') }}" />

    <!-- Font Awesome Icon -->
    <script src="https://kit.fontawesome.com/ae6ae307e8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">

    <!-- Hoja de estilo personalizada -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/custom.css') }}" />

    <!-- home.css añadir imagenes de boton para inicio -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/home.css') }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ asset('js/push.js') }}"></script>
    <script src="{{ asset('js/serverWorker.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.jpg') }}" />

</head>

<body>
    <!-- HEADER -->
    <header>

        <div id="encabezado-superior">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=%2B59173916007&text=Mas%20informaci%C3%B3n&app_absent=0"><i
                                class="fa fa-phone"></i> +59173916007</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> miniMarket@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> direccion</a></li>
                </ul>

                <ul class="header-links pull-right">

                    @if (Auth::guest())

                        <li><a href="{{ route('login') }}"><i class="fa fa-user-o"></i>Iniciar</a></li>

                        <li><a href="{{ route('register') }}"><i class="fa fa-user-o"></i>Registrar</a></li>
                    @else
                        
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

        


    </header>
    <!-- /HEADER -->


    

    <!--<button class="btn btn-info" id="sendPushNotification">Notificación</button>-->

    <!--Portada--->
    <!-- SLIDER -->
   
    <!-- SLIDER -->
    <!----Portada--->

    <!--====== Section Content ======-->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                <div class="service u-h-100">
                    <div class="service__icon"><i class="fa fa-truck" aria-hidden="true"
                            style="font-size:70px;"></i></div>
                    <div class="service__info-wrap">

                        <span class="service__info-text-1">Envío gratis</span>

                        <span class="service__info-text-2">Envío gratis solo a Santa Cruz. O pedidos superiores a
                            1000.Bs</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                <div class="service u-h-100">
                    <div class="service__icon"><i class="fa fa-dollar" aria-hidden="true"
                            style="font-size:60px;"></i></div>
                    <div class="service__info-wrap">

                        <span class="service__info-text-1">Compra con confianza</span>

                        <span class="service__info-text-2">Nuestra protección cubre su compra desde el clic hasta la
                            entrega</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                <div class="service u-h-100">
                    <div class="service__icon"><i class="fa fa-comment-o" aria-hidden="true"
                            style="font-size:60px;"></i></div>
                    <div class="service__info-wrap">

                        <span class="service__info-text-1">Centro de ayuda 24 horas</span>

                        <span class="service__info-text-2">Asistencia las 24 horas para una experiencia de compra
                            fluida</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENIDO -->
    
    <!-- /Section -->

    <!-- CONTENIDO -->


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
                                data-href="https://www.facebook.com" data-tabs="timeline"
                                data-width="250" data-height="40" data-small-header="true"
                                data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com">Quality
                                        Shoes</a>
                                </blockquote>
                            </div>
                            <br>
                            <p>Nos dedicamos a ofrecerte los mejores servicios</p>



                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>Ubicacion</a></li>
                                <li><a target="_blank"
                                        href="https://api.whatsapp.com/send/?phone=%2B59173916007&text=Mas%20informaci%C3%B3n&app_absent=0"><i
                                            class="fa fa-phone"></i>+59173916007</a></li>
                                <li><a href="mailto:minimarketStore@gmail.com "><i class="fa fa-envelope-o"></i>
                                        minimarket@gmail.com </a></li>



                                <div class="footer-social">
                                    <a target="_blank" href="https://www.facebook.com"><i
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
                                    <img alt="" border="0" src="https://www.paypal.com" width="1"
                                        height="1" />
                                </form>
                            </ul>
                        </div>
                    </div>
                    <div class="outer-footer__content">
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
                                Copyright &copy; 2024 Todos los derechos reservados. | QualityStore
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
