    <!-- Modal search -->
    {{-- <div class="modal fade" id="searchModal" tabindex="-1">
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
    </div> --}}

    @include('inc.carousel')
    
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
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
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.5s">
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
                <div class="col-lg-4 wow zoomIn" data-wow-delay=".7s">
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
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.4s">
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
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
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
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.8s">
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