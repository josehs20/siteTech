@extends('layouts.app')

@section('content')

    <style>
        #labelArquivo {
            background-color: #3498db;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            margin: 10px;
            padding: 6px 20px
        }

        #arquivos {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- Formulário para upload --}}

                <form id="uploadArquivos" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <label id="labelArquivo" for="arquivos">Selecionar Arquivos</label>
    
                            <input required onchange="pegaArquivos()" type="file" multiple name="files[]" id="arquivos">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-outline-primary mt-2" style="float: right !important;">Upload</button>
                        </div>
                    </div>
                   
                </form>
                <div class="mt-3">
                    <ol id="olArquivos" class="list-group list-group-numbered">

                    </ol>
                </div>
                <br>
                <div id="divAlert" class="alert alert-success d-none" role="alert">

                </div>
                <div id="divProgress" class="progress d-none">
                    <div id="progress" class="progress progress-bar" role="progressbar" aria-valuenow="10"
                        aria-valuemin="0" aria-valuemax="100">
                        <h6 id="porcentoProgress" style="margin-top:8px; color:white">0%</h6>
                    </div>
                </div>


                {{-- fim form --}}


                <div class="card mt-5">
                    <div class="card-header">Arquivos sendo exportados para CLOUD</div>

                    <div style="overflow: auto; width: auto" class="card-body">
                        @if (count($arquivos))
                            <table class="table table-overflow">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">nome</th>
                                        <th scope="col">Download</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($arquivos as $key => $item)
                                        <tr style="cursor: pointer;">
                                            <th scope="row">{{ $key }}</th>
                                            <td> <a
                                                    href="{{ route('admin_download', ['caminho' => $caminho, 'nome' => str_replace('uploads/uteis/', '', $item)]) }}">
                                                    {{ str_replace('uploads/uteis/', '', $item) }}</a>
                                            </td>
                                            <td style="align-items: center;"><i class="bi bi-cloud-download"></i></td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger" role="alert">
                                Todos arquivos exportado para CLOUD, você pode encontrar em Uteis
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
