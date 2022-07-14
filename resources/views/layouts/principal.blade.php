<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>All Tech Sistemas</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Itaperuna</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>(22) 99923-8245</small>
                    <small class="text-light"><i
                            class="fa fa-envelope-open me-2"></i>suporte@alltechsistemas.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://web.whatsapp.com/send?phone=5522999238245" target="_blank"><i
                            class="fab fa-whatsapp fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/alltechsistemas" target="_blanck"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/sistemas_alltech/" target="_blanck"><i
                            class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav
            class="{{ Request::segment(1) == 'login' ? 'bg-info ' : '' }}navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand p-0">
                <h4 class="m-0"><img width="50px" src="img/logo2.png" alt=""></i>&nbsp;&nbsp; All Tech
                    Sistemas</h4>
            </a>
            <button class="navbar-toggler" onclick="colapsefuncion('navbarCollapse')" type="button" data-bs-toggle="collapse"
                data-bs-target="">
                <span class="fa fa-bars"></span>
            </button>
            <div class="colapseNavBar collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('index') }}"
                        class="nav-item nav-link {{ Request::segment(1) == '' ? 'active' : '' }}">Página inicial</a>
                    <a href="{{ route('quemSomos') }}"
                        class="nav-item nav-link {{ Request::segment(1) == 'quem-somos' ? 'active' : '' }}">Quem
                        somos</a>
                    <a href="{{ route('solucoes') }}"
                        class="nav-item nav-link  {{ Request::segment(1) == 'solucoes' ? 'active' : '' }}">Soluções</a>
                    <a href="http://www.nfe.fazenda.gov.br/portal/principal.aspx" target="_blank"
                        class="nav-item nav-link ">Site Sefaz</a>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" onclick="colapsefuncion('dropPagina')" data-bs-toggle="collapse"
                            data-bs-target="">Páginas</a>
                        <div class="dropdown-menu m-0" id="dropPagina">
                            <a href="{{ route('index') }}" class="dropdown-item">Início</a>

                            <a href="{{ route('quemSomos') }}" class="dropdown-item">Quem Somos</a>
                            <a href="{{ route('solucoes') }}" class="dropdown-item">Soluções</a>
                            <a href="/#faleConoscoFooter" class="dropdown-item">Fale conosco</a>
                            <a href="{{ route('downloads') }}" class="dropdown-item">Downloads</a>
                            <a href="/#ondeEstamos" class="dropdown-item">Onde estamos</a>
                        </div>

                    </div>
     
                    <div class="nav-item dropdown">
                        <a  class="nav-link dropdown-toggle" onclick="colapsefuncion('dropSitesVinculados')" data-bs-toggle="collapse"
                        data-bs-target="">Sites
                            vinculados</a>
                        <div class="dropdown-menu m-0" id="dropSitesVinculados">
                            <a target="_blank" href="http://app.alltechsistemas.com.br/login"
                                class="dropdown-item">Dashboard (Consultas)</a>
                            <a target="_blank" href="http://venda.alltechsistemas.com.br/"
                                class="dropdown-item">Venda
                                Externa</a>
                        </div>
                    </div>
                    {{-- <a href="contact.html" class="nav-item nav-link">Fale conosco</a> --}}
                </div>
                {{-- <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> --}}

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class=" mx-3">Painel</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Área restrita</a>
                            {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}

                            {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif --}}
                        @endauth
                    </div>
                @endif
            </div>
        </nav>
    </div>

    @yield('conteudo')


    <!-- Footer Start -->
    <div id="faleConoscoFooter" class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="{{ route('index') }}" class="navbar-brand p-0">
                            <h3 style="color:#ffff" class="m-0"><img width="50px" src="img/logo2.png"
                                    alt=""></i>&nbsp;&nbsp; All Tech
                                Sistemas</h3>
                        </a>
                        <p class="mt-3 mb-4">
                            Com mais de 14 anos de experiência no mercado de Automação Comercial , a ALL TECH
                            SISTEMAS tem como principal objetivo criar soluções inovadoras que ajudam a total
                            integração entre diversos setores de uma empresa e nos momentos de decisão,
                            possibilitando assim, maior competitividade no seu segmento de mercado.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Contato</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Itaperuna</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">alltechsistemas@alltech.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">(22) 99923-8245</p>
                            </div>
                            <div class="d-flex mt-4">

                                <a class="btn btn-primary btn-square me-2"
                                    href="https://web.whatsapp.com/send?phone=5522999238245" target="_blank"><i
                                        class="fab fa-whatsapp fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/alltechsistemas" target="_blanck"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="https://www.instagram.com/sistemas_alltech/" target="_blanck"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            {{-- div mei footer --}}
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Páginas</h3>
                            </div>

                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ route('quemSomos') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Quem Somos</a>
                                <a class="text-light mb-2" href="{{ route('solucoes') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Soluções</a>
                                <a class="text-light mb-2" href="/#faleConoscoFooter"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Fale conosco</a>
                                <a class="text-light mb-2" href="{{ route('downloads') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Downloads</a>
                                <a class="text-light mb-2" href="/#ondeEstamos"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Onde estamos</a>
                                <a target="_blank" class="text-light mb-2"
                                    href="http://www.nfe.fazenda.gov.br/portal/principal.aspx" target="_blank"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Site Sefaz (Baixar XML)</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a id="footerCopy" class="text-white border-bottom">
                                Copyright © 2022 All Tech Sistemas Todos Direitos Reservados </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
      
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a style="padding: 18px; !important;" href="https://web.whatsapp.com/send?phone=5522999238245" target="_blank" style="display: block !important" class="btn btn-lg btn-success back-to-top"><i
        class="fab fa-whatsapp fw-normal" ></i></a>
       

</body>
<!-- JavaScript Libraries -->
{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
    const dataAtual = new Date();
    document.getElementById('footerCopy').innerText = 'Copyright ' + dataAtual.getFullYear() +
        ' All Tech Sistemas Todos Direitos Reservados';

    function colapsefuncion(id) {
        var colapse = document.getElementById(id);
        if (!colapse.classList.contains("show")) {
            console.log(colapse.classList.add("show"));
        } else {
            console.log(colapse.classList.remove("show"));
        }
    }

    // function teste() {
    //     var colapse = document.getElementById('dropPagina');
    //     if (!colapse.classList.contains("show")) {
    //         console.log(colapse.classList.add("show"));
    //     } else {
    //         console.log(colapse.classList.remove("show"));
    //     }
    // }
</script>

</html>
