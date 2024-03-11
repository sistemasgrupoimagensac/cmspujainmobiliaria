<?php

namespace App\Http\Controllers\PujaInmobiliaria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function __invoke()
    {
        return view('pujaapp.index.dashboard');
    }
}
