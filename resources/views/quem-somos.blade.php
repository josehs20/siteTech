@extends('layouts.principal')
@section('conteudo')
    @include('inc.carousel')

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.5s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;border-radius: 10px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-primary"></i>

                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Missão</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.7s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;border-radius: 10px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Visão</h5>
                            {{-- <h1 class="mb-0" data-toggle="counter-up">12345</h1> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="1.0s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;border-radius: 10px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>


                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Valores</h5>
                            {{-- <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Facts Start -->






    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="fw-bold text-primary text-uppercase">Quem somos</h1>
                        <h5 class="mb-0">&nbsp;&nbsp; Com mais de 14 anos de experiência no mercado de Automação Comercial
                            , a ALL TECH
                            SISTEMAS tem como principal objetivo criar soluções inovadoras que ajudam a total integração
                            entre diversos setores de uma empresa e nos momentos de decisão, possibilitando assim, maior
                            competitividade no seu segmento de mercado. Possuímos uma gama de serviços que visam contribuir
                            com o desenvolvimento e o sucesso de nossos clientes.</h5>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-check text-white"></i>
                                       
                                    </div>
                                    <h4>MISSÃO</h4>
                                    <p class="mb-0">Oferecer serviços eficientes de planejamento, análise e
                                        desenvolvimento de softwares, buscando inovações tecnológicas, visando atender
                                        plenamente as expectativas de nossos clientes.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-users text-white"></i>

                                    </div>
                                    <h4>VISÃO</h4>
                                    <p class="mb-0">• Reconhecimento de seus serviços avaliados com Qualidade e Confiabilidade por seus Clientes e Usuários. <br>
                                        • Ser estabelecida como principal provedora em nossa área de atuação em todo território nacional.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h4>VALORES</h4>
                                    <p class="mb-0">Relacionamento ético com os clientes e colaboradores; <br>

                                        Compromisso em cumprir pontualmente nossas obrigações; <br>
                                        
                                        Comprometimento com resultados; <br>
                                        
                                        Constante busca da excelência.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
