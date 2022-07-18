<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasSiteController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
