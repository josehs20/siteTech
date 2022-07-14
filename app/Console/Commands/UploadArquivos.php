<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;

class UploadArquivos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upload:arquivos';

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
        $diretoriesStorage = ['uploads/uteis/'];
        $diretoriesFtp = ['UTILS'];

        foreach ($diretoriesStorage as $key => $pathStorage) {
            $fileStorage = Storage::disk('local')->files($pathStorage);
            $filesFtp = Storage::disk('ftp')->files($diretoriesFtp[$key] );

           $this->exportaArquivoFtp($fileStorage, $pathStorage, $diretoriesFtp[$key]);

        }

    }
    private function exportaArquivoFtp($fileStorage, $pathStorage, $diretoriesFtp)
    {
        foreach ($fileStorage as $key => $file) {
            $fileVerify = $file;
            $fileVerify = str_replace($pathStorage, '', $fileVerify);

            if (!Storage::disk('ftp')->exists($diretoriesFtp . '/' . $fileVerify)) {
                Storage::disk('ftp')->put($diretoriesFtp . '/' . $fileVerify, Storage::get($file));
                
                Storage::move($pathStorage . $fileVerify, 'downloads/uteis/' . $fileVerify);

                echo $fileVerify . ' arquivo exportado';
            } elseif (Storage::disk('local')->size($pathStorage . $fileVerify) != Storage::disk('ftp')->size($diretoriesFtp . '/' . $fileVerify)) {
                Storage::disk('ftp')->put($diretoriesFtp . '/' . $fileVerify, Storage::get($file));
            
                Storage::disk('local')->delete('downloads/uteis/' . $fileVerify);

                Storage::move($pathStorage . $fileVerify, 'downloads/uteis/' . $fileVerify);
             
                echo 'substituido com sucesso';
            }else{

                echo ' ok ';

            }
        }
    }
}
