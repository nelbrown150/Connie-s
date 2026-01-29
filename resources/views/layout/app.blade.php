<!doctype html>
<html class="no-js" lang="en">
   

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CONNIE'S | Soluciones Integrales </title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/icon.png">

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/sal.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/base.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/vendor/custom.css">

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>
</head>
<body class="sticky-header">

    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <header class="header axil-header header-style-3">
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="{{ route('index') }}" class="logo">
                            <img src="assets/images/logo/logo.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="{{ route('index') }}" class="logo">
                                    <img src="assets/images/logo/logo.png" alt="Site Logo">
                                </a>
                            </div>
                            @php $isIndex = request()->routeIs('index'); @endphp
                            <ul class="mainmenu">
                                <li><a href="{{ $isIndex ? '#servicios' : route('index').'#servicios' }}" class="smoth-animation">Productos y Servicios</a></li>
                                <li><a href="{{ $isIndex ? '#nosotros' : route('index').'#nosotros' }}" class="smoth-animation">Nosotros</a></li>
                                <li><a href="{{ route('experiences') }}">Nuestro Trabajo</a></li>
                                <li><a href="{{ $isIndex ? '#contacto' : route('index').'#contacto' }}" class="smoth-animation">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-action">
                        <ul class="actio-list">
                            <li class="wishlist">
                                <a href="https://wa.me/51910398955?text=Hola%20desearía%20un%20servicio%20de%20su%20empresa" target="_blank" style="color: var(--color-whatsapp);">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="axil-footer-area footer-style-2 pv-footer-area">
        <div class="copyright-area copyright-default">
            <div class="container">
                <div class="copyright-left d-flex flex-wrap justify-content-center">
                    <ul class="quick-link">
                        <li>© <span id="current_year"></span>. All rights reserved by <a target="_blank" href="#">Browns Enterprises SACS</a>.</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
     
    <!-- Modal: Servicios Generales (contenido vacío para gestionar) -->
    <div class="modal fade" id="modalServiciosGenerales" tabindex="-1" aria-labelledby="modalServiciosGeneralesLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">
                        <div class="section-title-wrapper section-title-center">
                            <h2 class="title">Servicios Generales</h2>
                        </div>
                        <div class="row row-cols-xl-4 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 row--20 d-flex align-items-center">
                            <div class="col">
                                <div class="service-box how-to-sell" target="_blank" href="https://wa.me/5190398955?text=Hola%20quiero%20más%20información">
                                    <div class="icon">
                                        <img src="assets/images/logo/icon.png" alt="Service">
                                    </div>
                                    <h6 class="title">Deseas nuestros Servicios</h6>
                                    <p>Realizamos implementaciones y remodelaciones de locales comerciales, industriales y oficinas.</p>
                                       <a class="btn bg-primary w-lg" target="_blank" href="https://wa.me/51910398955?text=Hola%20desearía%20solicitar%20un%20servicio%20general%20para%20mi%20local" ><i class="fab fa-whatsapp"></i> SOLICITAR</a>
                                </div>
                            </div>
                            <div class="col p-5">
                                <img src="assets/images/preview/home-01.png" alt="Service">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Modal:2-->
    <div class="modal fade" id="modalGestiondeActivos" tabindex="-1" aria-labelledby="modalGestiondeActivosLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">
                        <div class="section-title-wrapper section-title-center">
                            <h2 class="title">Gestion de activos</h2>
                        </div>
                        <div class="row row-cols-xl-4 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 row--20 d-flex align-items-center">
                            <div class="col">
                                <div class="service-box how-to-sell" target="_blank" href="https://wa.me/5190398955?text=Hola%20quiero%20más%20información">
                                    <div class="icon">
                                        <img src="assets/images/logo/icon.png" alt="Service">
                                    </div>
                                    <h6 class="title">Deseas nuestros Servicios</h6>
                                    <p>Evaluamos, diseñamos y ejecutamos un plan de mantenimiento adecuado a los activos del cliente, para así aumentar su vida útil.</p>
                                       <a class="btn bg-primary w-lg" target="_blank" href="https://wa.me/51910398955?text=Hola%20desearía%20solicitar%20un%20servicio%20de%20gestion%20activos%20para%20mi%20local" ><i class="fab fa-whatsapp"></i> SOLICITAR</a>
                                </div>
                            </div>
                            <div class="col p-5">
                                <img src="assets/images/preview/home-02.png" alt="Service">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Modal:3-->
    <div class="modal fade" id="modalHVAC" tabindex="-1" aria-labelledby="modalHVACLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">
                        <div class="section-title-wrapper section-title-center">
                            <h2 class="title">HVAC</h2>
                        </div>
                        <div class="row row-cols-xl-4 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 row--20 d-flex align-items-center">
                            <div class="col">
                                <div class="service-box how-to-sell" target="_blank" href="https://wa.me/5190398955?text=Hola%20quiero%20más%20información">
                                    <div class="icon">
                                        <img src="assets/images/logo/icon.png" alt="Service">
                                    </div>
                                    <h6 class="title">Deseas nuestros Servicios</h6>
                                    <p>Fabricamos e instalamos ductería y tuberías para extracción de aire, ventilación y aire condicionado en materiales como.</p>
                                       <a class="btn bg-primary w-lg" target="_blank" href="https://wa.me/51910398955?text=Hola%20desearía%20solicitar%20un%20servicio%20de%20HVAC%20a%20para%20mi%20local" ><i class="fab fa-whatsapp"></i> SOLICITAR</a>
                                </div>
                            </div>
                            <div class="col p-5">
                                <img src="assets/images/preview/home-03.png" alt="Service">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Modal:4-->
    <div class="modal fade" id="modalOtros" tabindex="-1" aria-labelledby="modalOtrosLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">
                        <div class="section-title-wrapper section-title-center">
                            <h2 class="title">Otros</h2>
                        </div>
                        <div class="row row-cols-xl-4 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 row--20 d-flex align-items-center">
                            <div class="col">
                                <div class="service-box how-to-sell" target="_blank" href="https://wa.me/5190398955?text=Hola%20quiero%20más%20información">
                                    <div class="icon">
                                        <img src="assets/images/logo/icon.png" alt="Service">
                                    </div>
                                    <h6 class="title">Deseas nuestros Servicios</h6>
                                    <p>Nos adaptamos a sus necesidades de su empresa.</p>
                                       <a class="btn bg-primary w-lg" target="_blank" href="https://wa.me/51910398955?text=Hola%20que%20otros%20servicios%20tienen%20para%20mi%20local" ><i class="fab fa-whatsapp"></i> SOLICITAR</a>
                                </div>
                            </div>
                            <div class="col p-5">
                                <img src="assets/images/preview/home-4.png" alt="Service">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </a>
    </div>
    <!-- JS ============================================ -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/counterup.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/custom.js"></script>
    <script src="assets/js/main.js"></script>

    @yield('scripts')
    
</body>
</html>
