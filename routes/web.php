<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PaginasSiteController::class, 'index'])->name('index');
// Route::get('/quem-somos', [\App\Http\Controllers\PaginasSiteController::class, 'quemSomos'])->name('quemSomos');
// Route::get('/solucoes', [\App\Http\Controllers\PaginasSiteController::class, 'solucoes'])->name('solucoes');
// Route::get('/downloads', [\App\Http\Controllers\PaginasSiteController::class, 'downloads'])->name('downloads');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin_utils', [App\Http\Controllers\PainelAdminController::class, 'admin_utils'])->name('admin_utils');
Route::get('/admin_update_egi', [App\Http\Controllers\PainelAdminController::class, 'downloadUpdatesEgi'])->name('admin_update_egi');
Route::get('/admin_diversos', [App\Http\Controllers\PainelAdminController::class, 'downloadDiversos'])->name('admin_diversos');
Route::get('/arquivos_fila_cloud', [App\Http\Controllers\PainelAdminController::class, 'arquivos_fila_cloud'])->name('arquivos_fila_cloud');

//rotas para download e upload de arquivos
Route::get('/admin-download/{caminho}/{nome}', [App\Http\Controllers\PainelAdminController::class, 'download'])->name('admin_download');
Route::post('/uploadUtils', [App\Http\Controllers\PainelAdminController::class, 'uploadUtils'])->name('uploadUtils');
