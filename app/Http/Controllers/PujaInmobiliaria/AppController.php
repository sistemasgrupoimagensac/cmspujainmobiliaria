<?php

namespace App\Http\Controllers\PujaInmobiliaria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class AppController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        // dd($products);
        return view('pujaapp.inicio.inicio',compact('products'));
    }
}
