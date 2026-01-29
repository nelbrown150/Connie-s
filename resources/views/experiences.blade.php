@extends('layout.app')
@section('content')
<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">Nuestro Trabajo</li>
                        </ul>
                        <h1 class="title">Nuestro Trabajo</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="assets/images/logo/icon.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->

    <!-- Start About Area  -->
    <div class="axil-about-area about-style-1 axil-section-gap ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-thumbnail">
                        <div class="thumbnail">
                            <img src="assets/images/about/about-01.png" alt="About Us">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <div class="about-content content-right">
                        <span class="title-highlighter highlighter-primary2"> <i class="far fa-shopping-basket"></i>Connie´s</span>
                        <h3 class="title">Nuestra Empresa</h3>
                        <span class="text-heading">Con más de 15 años en el mercado, somos una empresa especializada en la implementación y mantenimiento de tiendas del sector retail.  </span>
                        <div class="row">
                            <div class="col-xl-6">
                                <p class="mb--0">Estamos orientados a la asistencia técnica en el área de; electricidad industrial y comercial, fabricación de luminarias, fabricación de accesorios metalmecánicos, instalación de maquinaria diversa, limpieza de exteriores, mantenimiento de letreros luminosos, mantenimiento de maquinaria de matizado de pinturas, venta y servicio post-venta de maquinaria de corte de melamine.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->

    <!-- Start About Area  -->
    <div class="about-info-area">
        <div class="container">
            <div class="row row--20">
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb">
                            <img src="assets/images/about/shape-01.png" alt="Shape">
                        </div>
                        <div class="content">
                            <h6 class="title">10,000 + clientes satisfechos</h6>
                            <p>Nos adaptamos a las necesidades de nuestros clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb">
                            <img src="assets/images/about/shape-02.png" alt="Shape">
                        </div>
                        <div class="content">
                            <h6 class="title">21 años de Experiencia</h6>
                            <p>Empleamos nuestra experiencia para ofrecer soluciones innovadoras y de calidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb">
                            <img src="assets/images/about/shape-03.png" alt="Shape">
                        </div>
                        <div class="content">
                            <h6 class="title">Innovación</h6>
                            <p>Trabajamos con las últimas tecnologías para ofrecer eficaces soluciones y más innovadoras.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->

    <!-- Start Team Area  -->
    <!--<div class="axil-team-area bg-wild-sand">
        <div class="team-left-fullwidth">
            <div class="container ml--xxl-0">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="fas fa-users"></i> Nuestro Equipo</span>
                    <h3 class="title">Staff</h3>
                </div>
                <div class="team-slide-activation slick-layout-wrapper--20 axil-slick-arrow  arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="assets/images/team/team-01.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">Founder</span>
                                <h5 class="title">Rosalina D. Willson</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="assets/images/team/team-02.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">CEO</span>
                                <h5 class="title">Ukolilix X. Xilanorix</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="assets/images/team/team-03.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">Designer</span>
                                <h5 class="title">Alonso M. Miklonax</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="assets/images/team/team-04.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">Designer</span>
                                <h5 class="title">Alonso M. Miklonax</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="assets/images/team/team-02.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">Designer</span>
                                <h5 class="title">Alonso M. Miklonax</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End Team Area  -->

    <!-- Start About Area  -->
    <div class="axil-about-area about-style-2">
        <div class="container">
            <div class="row align-items-center mb--80 mb_sm--60">
                <div class="col-lg-5">
                    <div class="about-thumbnail">
                        <img src="assets/images/about/about-02.png" alt="about">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content content-right">
                        <span class="subtitle">  </span>
                        <h4 class="title">Visión</h4>
                        <p>Ser la empresa líder a nivel nacional en soluciones integrales del sector retail.</p>
                        <h4 class="title">Misión</h4>
                        <p>Brindar a nuestros clientes soluciones oportunas y profesionales optimizando sus recursos al máximo.</p>
                        <a href="https://wa.me/51910398955?text=Hola%20quiero%20solicitar%20un%20servicio" target="_blank" class="axil-btn btn-outline">Solicita Nuestros Servicios</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class="about-thumbnail">
                        <img src="assets/images/about/about-03.png" alt="about">
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="about-content content-left">
                        <span class="subtitle">  </span>
                        <h4 class="title">Valores</h4>
                        <ul></ul>
                            <li>Creemos en el equipo humano como el mayor activo de nuestro negocio</li>
                            <li>Creemos en la autonomía de los profesionales, en su pro-actividad, en sus iniciativas personales y en sus aportaciones.</li>
                            <li>Creemos en la experiencia del equipo.</li>
                            <li>Nos gustan los retos: los nuestros y los de nuestros clientes. Si nos sentimos «cómodos» es que no vamos lo suficientemente rápido.</li>
                            <li>Creemos en la honestidad y transparencia: con nosotros y con nuestros clientes.</li>
                            <li>Creemos en la humildad como medio de mejora continua de nuestro servicio.</li>
                        </ul>
                        
                        <a href="https://wa.me/51910398955?text=Hola%20quiero%20solicitar%20un%20servicio" target="_blank"  class="axil-btn btn-outline">Solicita Nuestros Servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->

    <!-- Start Axil Newsletter Area   
    <div class="axil-newsletter-area axil-section-gap">
        <div class="container">
            <div class="bg_image bg_image--14 newsletter-wrapper">
                <div class="newsletter-content">
                    <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                    <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                    <div class="input-group newsletter-form">
                        <div class="position-relative newsletter-inner mb--15">
                            <input placeholder="example@gmail.com" type="text">
                        </div>
                        <button type="submit" class="axil-btn mb--15">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- End .container -->
    <!--</div>-->
    <!-- End Axil Newsletter Area  -->
</main>

@endsection