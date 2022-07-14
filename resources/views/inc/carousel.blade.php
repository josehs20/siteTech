@if (Request::segment(1) == '')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sistema de gestão
                            empresarial</h5>
                        <h6 class="text-white text-uppercase mb-3 animated slideInDown">Simplifique a gestao da sua
                            empresa
                            com um sistema eficiente e fácil de usar</h6>

                        {{-- <h6 class="display-1 text-white mb-md-4 animated zoomIn">Simplifique a gestao da sua empresa </h6> --}}
                        {{-- <h6 class="display-1 text-white mb-md-4 animated zoomIn">com um sistema eficiente e fácil de usar</h6> --}}
                        <a href="{{route('quemSomos')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Saiba
                            mais</a>
                        <a href="#faleConoscoFooter"
                            class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sistema para Lojas</h5>
                        <h6 class="text-white text-uppercase mb-3 animated slideInDown">Integre todas as suas lojas
                            com nossa solução <h3 class="text-white text-uppercase mb-3 animated slideInDown">Multi
                                Loja</h3>
                        </h6>
                        {{-- <h4 class="display-1 text-white mb-md-4 animated zoomIn">Integre todas as suas lojas com nossa solução Multi Loja</h4> --}}
                        <a href="{{route('quemSomos')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Saiba
                            mais</a>
                        <a href="#faleConoscoFooter"
                            class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
@elseif(Request::segment(1) == 'quem-somos')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-3 animated slideInDown">Quem somos</h2>


                        {{-- <h6 class="display-1 text-white mb-md-4 animated zoomIn">Simplifique a gestao da sua empresa </h6> --}}
                        {{-- <h6 class="display-1 text-white mb-md-4 animated zoomIn">com um sistema eficiente e fácil de usar</h6> --}}
                        <a href="{{route('quemSomos')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Saiba
                            mais</a>
                        <a href="#faleConoscoFooter"
                            class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@elseif(Request::segment(1) == 'solucoes')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-3 animated slideInDown">Nossas Soluções</h2><br><br>
                        <h2 class="text-white text-uppercase mb-3 animated slideInDown">SISTEMA PARA LOJAS</h2>

                        {{-- <h6 class="display-1 text-white mb-md-4 animated zoomIn">Simplifique a gestao da sua empresa </h6> --}}
                        {{-- <h6 class="display-1 text-white mb-md-4 animated zoomIn">com um sistema eficiente e fácil de usar</h6> --}}
                        <a href="{{route('quemSomos')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Saiba
                            mais</a>
                        <a href="#faleConoscoFooter"
                            class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif(Request::segment(1) == 'downloads')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-3 animated slideInDown">Downloads</h2><br><br>
                        {{-- <h2 class="text-white text-uppercase mb-3 animated slideInDown">SISTEMA PARA LOJAS</h2> --}}

                        {{-- <h6 class="display-1 text-white mb-md-4 animated zoomIn">Simplifique a gestao da sua empresa </h6> --}}
                        {{-- <h6 class="display-1 text-white mb-md-4 animated zoomIn">com um sistema eficiente e fácil de usar</h6> --}}
                        {{-- <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Saiba
                            mais</a>
                        <a href=""
                            class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif(Request::segment(1) == 'login')
    <div style="background-color:blue; width:100%; height:100%"></div>
@endif
