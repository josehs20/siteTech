@extends('layouts.principal')

@section('conteudo')

<div id="divs">

    <!--inicio -->
    <div id="inicio">
        @include('inc.inicio')
    </div>

    <!--Quem somos -->
    <div id="quemSomos">
        @include('inc.quem-somos')
    </div>

    <div id="solucoes">
        <!--soluções -->
        @include('inc.solucoes')
    </div>

    <div id="downloads">
        <!--download -->
        @include('inc.downloads')
    </div>

    <div id="ondeEstamos">
        <!-- onde estamos -->
        @include('inc.onde-estamos')
    </div>

    <div id="faleConosco">
        <!-- fale-conosco -->
        @include('inc.fale-conosco')
    </div>
</div>
    {{-- </div>
    </div> --}}
@endsection
