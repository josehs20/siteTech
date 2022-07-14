<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Foreach_;

class PadraoArquivosFtp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:arquivosFtp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //comando para storage e ftp já percorre todas as pastas 
        $diretoriesFtp = ["UTILS", "DIVERSOS", "UPDATES"];
        $diretoriesStorage = ["downloads/uteis", "downloads/diversos", "downloads/updates"];

        foreach ($diretoriesFtp as $key => $dirFtp) {
            
                $fileStorage = Storage::disk('local')->files($diretoriesStorage[$key]);  
                $filesUtils = Storage::disk('ftp')->allFiles($dirFtp);
               
                $this->sincronizaArquivosFtp($filesUtils, $fileStorage, $dirFtp, $diretoriesStorage[$key]);
        }
    }

    private function sincronizaArquivosFtp($filesUtils, $fileStorage, $dirFtp, $pathStorage){
       
        foreach ($filesUtils as $key => $file) {
            $fileVerify = $file;
            $fileVerify = str_replace($dirFtp, '', $fileVerify);

            if (!Storage::disk('local')->exists($pathStorage . $fileVerify)) {

                Storage::disk('local')->put($pathStorage . str_replace($dirFtp, '', $file), Storage::disk('ftp')->get($file));

                echo $file." adicionado com sucesso\n";
            }elseif(Storage::disk('local')->size($pathStorage . $fileVerify) != Storage::disk('ftp')->size($file)){
                //ja substitui o arquivo
                Storage::disk('local')->put($pathStorage . $fileVerify, Storage::disk('ftp')->get($file));
                echo $file." substituido com sucesso \n";
            }else{
                echo $fileVerify . " ok \n";
            }
        }

        foreach ($fileStorage as $key => $file) {

            $fileVerify = $file;
            $fileVerify = str_replace($pathStorage, $dirFtp, $fileVerify);

            if (!Storage::disk('ftp')->exists($fileVerify)) {
                Storage::disk('local')->delete($file);
                echo $file . " arquivo deletado storage\n";
            }else {
                echo $fileVerify. " Existe no ftp \n";
            }
        }
        return true;
    }
}
