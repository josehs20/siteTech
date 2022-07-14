@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
          
                <div class="card mt-5">
                    <div class="card-header">Painel de downloads UTILS</div>

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
                                                    href="{{ route('admin_download', ['caminho' => $caminho, 'nome' => str_replace('downloads/' . $caminho . '/', '', $item)]) }}">
                                                    {{ str_replace('downloads/' . $caminho . '/', '', $item) }}</a>
                                            </td>
                                            <td style="align-items: center;"><i class="bi bi-cloud-download"></i></td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger" role="alert">
                                Nenhum arquivo para download encontrado
                            </div>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
