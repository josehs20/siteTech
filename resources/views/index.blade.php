@extends('layouts.principal')
@section('conteudo')
    @include('inc.carousel')

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.5s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;border-radius: 10px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            {{-- <i class="fa fa-users text-primary"></i> --}}
                            <img src="img/loja.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Lojas</h5>
                            {{-- <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.7s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;border-radius: 10px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            {{-- <i class="fa fa-check text-white"></i> --}}
                            <img width="50px;" src="img/talheres.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Restaurantes</h5>
                            {{-- <h1 class="mb-0" data-toggle="counter-up">12345</h1> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="1.0s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;border-radius: 10px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            {{-- <i class="fa fa-award text-primary"></i> --}}
                            <img width="50px;" src="img/carro.png" alt="">

                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Auto Center</h5>
                            {{-- <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="1.3s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;border-radius: 10px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            {{-- <i class="fa fa-users text-primary"></i> --}}
                            <img src="img/oculos.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Óticas</h5>
                            {{-- <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="1.6s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;border-radius: 10px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            {{-- <i class="fa fa-check text-white"></i> --}}
                            <img width="50px;" src="img/medico.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Consultórios</h5>
                            {{-- <h1 class="mb-0" data-toggle="counter-up">12345</h1> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="2.0s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;border-radius: 10px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            {{-- <i class="fa fa-award text-primary"></i> --}}
                            <img width="50px;" src="img/carrinho.png" alt="">

                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Supermercados</h5>
                            {{-- <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1> --}}
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
                        <h5 class="fw-bold text-primary text-uppercase">Características da nossa solução</h5>
                        <h1 class="mb-0">Uma plataforma completa aliada ao seu negócio</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        {{-- <i class="fa fa-cubes text-white"></i> --}}
                                        <img width="40px;" src="{{ asset('img/direito.png') }}" alt="">
                                    </div>
                                    <h4>Adequação fiscal</h4>
                                    <p class="mb-0">Em conformidade com a legislação vigente, homolagado e autorizado
                                        pelo Confaz, compatível com a NF-e, NFC-e, PAF-ECF (Cupom Fiscal), MDF-e,
                                        SINTEGRA e SPED.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        {{-- <i class="fa fa-award text-white"></i> --}}
                                        <img width="40px;" src="{{ asset('img/estoque.png') }}" alt="">
                                    </div>
                                    <h4>Controle de Estoque
                                    </h4>
                                    <p class="mb-0">Tenha um controle de estoque preciso e integrado com vendas e
                                        financeiro, resultando em ajustes e conferências eficientes para sua empresa.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        {{-- <i class="fa fa-users-cog text-white"></i> --}}
                                        <img width="40px;" src="{{ asset('img/sacolaCompra.png') }}" alt="">

                                    </div>
                                    <h4>Gestão de Vendas</h4>
                                    <p class="mb-0">Administre os processos de venda com praticidade, tenha tudo
                                        registrado em uma listagem de vendas e gerencie com precisão a comissão de
                                        vendedores.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        {{-- <i class="fa fa-phone-alt text-white"></i> --}}
                                        <img width="40px;" src="{{ asset('img/controleFinanceiro.png') }}"
                                            alt="">

                                    </div>
                                    <h4>Controle Financeiro</h4>
                                    <p class="mb-0">Acompanhe as movimentações financeiras do seu negócio, com tudo
                                        integrado no sistema de gestão, o gerenciamento das suas contas será muito mais
                                        confiável.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        {{-- <i class="fa fa-users-cog text-white"></i> --}}
                                        <img width="40px;" src="{{ asset('img/grafico.png') }}" alt="">
                                    </div>
                                    <h4>Acompanhe seus resultados</h4>
                                    <p class="mb-0">Planeje-se melhor com os relatórios gerenciais detalhados,
                                        disponibilizamos os melhores relatórios para que sua tomada de decisão seja mais
                                        eficiente que nunca!</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <h4>Suporte Técnico</h4>
                                    <p class="mb-0">Os clientes da ALL TECH SISTEMAS contam com uma equipe
                                        especializada, que está à disposição para prestar um suporte técnico de
                                        qualidade</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- About End -->





    <!-- Testimonial Start -->
    <div id="ondeEstamos" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Localizações</h5>
                <h1 class="mb-0">Onde estamos</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        {{-- <img class="img-fluid rounded" src="img/testimonial-1.jpg"
                        style="width: 60px; height: 60px;"> --}}
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Itaperuna - RJ</h4>
                            <small class="text-uppercase">
                                Av. João Dias da Silva, 107 - Kennedy</small><br>
                            <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5522999238245"
                                target="_blank"> <i style="color: green"
                                    class="fab fa-whatsapp fw-normal"></i>&nbsp;&nbsp; (22)
                                9.9923-8245</a>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1300.7564595409426!2d-41.887232593488726!3d-21.214823811963836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbc607b2cee1f97%3A0x6bee2719057c70a3!2sAv.%20Jo%C3%A3o%20Dias%20da%20Silva%2C%20107%20-%20Kennedy%2C%20Itaperuna%20-%20RJ%2C%2028300-000!5e0!3m2!1spt-BR!2sbr!4v1657545948663!5m2!1spt-BR!2sbr"
                            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">CAMPOS DOS GOYTACAZES - RJ</h4>
                            <small class="text-uppercase">Rua Antônio Alves Cordeiro, 63 Pq Rosário</small><br>
                            <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5522981134230"
                                target="_blank"> <i style="color: green"
                                    class="fab fa-whatsapp fw-normal"></i>&nbsp;&nbsp; (22)
                                9.8113-4230
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.3151879477778!2d-41.327612085452564!3d-21.768059185602496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdd433fa504f57%3A0xd2071b36d6d12f88!2sR.%20Ant%C3%B4nio%20Alves%20Cordeiro%2C%2063%20-%20Parque%20Rosario%2C%20Campos%20dos%20Goytacazes%20-%20RJ%2C%2028027-050!5e0!3m2!1spt-BR!2sbr!4v1657546367858!5m2!1spt-BR!2sbr"
                            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">

                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Rio das ostras - RJ</h4>
                            <small class="text-uppercase">Rua Joaquim José Caridade 753 Casa 14 Chácara
                                Marileia</small><br>
                            <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5522981134230"
                                target="_blank"> <i style="color: green"
                                    class="fab fa-whatsapp fw-normal"></i>&nbsp;&nbsp; (22)
                                9.9745-6996</a>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.0466542601425!2d-41.93841818543746!3d-22.502432685218942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x97b4c11dadde25%3A0x8582fd1ad04b56d2!2sR.%20Joaquim%20Jos%C3%A9%20Caridade%2C%20753%20-%20Casa%2014%20-%20Maril%C3%A9a%20Ch%C3%A1cara%2C%20Rio%20das%20Ostras%20-%20RJ%2C%2028890-000!5e0!3m2!1spt-BR!2sbr!4v1657546537077!5m2!1spt-BR!2sbr"
                            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-12">
                        <h5 class="fw-bold text-primary text-uppercase"></h5>
                        <h1 class="mb-0">Peça uma proposta sem compromisso</h1>
                    </div>
                    <br>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-phone text-primary me-3"></i>(22) 3823 7761 /
                                3824-5260
                            </h5>
                        </div>
                        <div class="col wow zoomIn" data-wow-delay="0.4s">
                            <a style="font-size: 24px;" class="whatsapp-link"
                                href="https://web.whatsapp.com/send?phone=5522999238245" target="_blank"><i
                                    class="fab fa-whatsapp fw-normal text-success me-3"></i>(22) 99923-8245
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <div class="col d-flex justify-content-center">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Nome"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Mensagem"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        {{-- <i class="fa fa-phone-alt text-white"></i> --}}

                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- Quote End -->

 @endsection
