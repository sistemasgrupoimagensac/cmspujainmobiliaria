<?php

namespace App\Http\Controllers\PujaInmobiliaria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MeInteresa;
use App\Product;

class AppController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();


        // $productsSelection = $products->map(function($solicitante){
        //     $solicitante->interesado = null;
        //     $like= MeInteresa::where(['product_id'=> $solicitante->product_id,
        //     'user_puja_id'=>Auth::user()->id])->first();
        //     if ($like) {
        //         $solicitante->interesado = $like;
        //     }
        //     return $solicitante;
        // });
        $totalLikesPorProyecto = MeInteresa::where('status', 1)
        ->groupBy('product_id')
        ->selectRaw('product_id, count(*) as cantidad_likes')
        ->get()
        ->pluck('cantidad_likes', 'product_id');
        // dd($products);
        return view('pujaapp.inicio.inicio',compact('products'));
    }
    public function alquiler(){
        $products = Product::orderBy('id','desc')->get();
        return view('pujaapp.alquiler.alquiler',compact('products'));
    }
    
}
