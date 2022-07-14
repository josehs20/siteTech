<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class PainelAdminController extends Controller
{
    public function admin_utils()
    {
        $caminho = 'uteis';
        $arquivos = Storage::disk('local')->allFiles('downloads/uteis');

        return view('admin.utils', compact('arquivos', 'caminho'));
    }

    public function downloadUpdatesEgi()
    {
        $caminho = 'updates';
        $arquivos = Storage::disk('local')->allFiles('downloads/updates');

        return view('admin.update-egi', compact('arquivos', 'caminho'));
    }

    public function downloadDiversos()
    {
        $caminho = 'diversos';
        $arquivos = Storage::disk('local')->allFiles('downloads/diversos');

        return view('admin.diversos', compact('arquivos', 'caminho'));
    }

    public function download($caminho, $nome)
    {
        if ($caminho == 'uploads-uteis') {
            /*entra aqui caso queira baixar arquivo qeu ainda esta sendo exportado para cloud 
            $caminho com '-' pois url enterpreta para outra rota*/

            return Storage::download('uploads/uteis/'. $nome);
        }else{

            return Storage::download('downloads/' . $caminho . '/' . $nome);
        }
    }

    //ajax
    public function uploadUtils(Request $request)
    {
        
        $files = $request->file('files');

        try {
            foreach ($files as $key => $file) {
                $name = $file->getClientOriginalName();
                //dd($file);
               $path = $file->storeAs('uploads/uteis', $name);
            }
           // $command = Artisan::call('upload:arquivos');
          
            return response()->json(true);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json('Não foi possível tente novamente');
        }
    }
    
    public function arquivos_fila_cloud()
    {
        $caminho = 'uploads-uteis';
        $arquivos = Storage::disk('local')->allFiles('uploads/uteis');

        return view('admin.arquivos-fila-cloud', compact('arquivos', 'caminho'));
    }
}
