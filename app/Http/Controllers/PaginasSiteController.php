<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasSiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function quemSomos()
    {
        return view('quem-somos');
    }

    public function solucoes()
    {
       return view('solucoes');
    }
    public function downloads()
    {
        return view('downloads');
    }
}
