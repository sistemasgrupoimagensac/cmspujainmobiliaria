<?php

namespace App\Http\Controllers\PujaInmobiliaria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MeInteresa;
use App\Product;
use Illuminate\Support\Facades\Auth;

class AlquilerController extends Controller
{
    public function index(Request $request){
        
        $products = Product::orderBy('id','desc')
        ->where(function ($query) use ($request){
            if($request->category_id){
                $query->where('category_id',$request->category_id);  
            }
        })
        ->where(function($query)use($request){
            if($request->status_property){
                $query->where('status_property_id',$request->status_property_id);
            }
        })
      
        ->where(function($query)use($request){
            if($request->rooms >=5){
                $query->where('rooms','>=',5);
   
            }else{
                $query->where('rooms','<',5);
            }
        })
        ->where('status_property_id',1)
        ->where('status',1)
        ->get();
     
        $solicitantesprocesados = $products->map(function($product){
            $product->interesado = null;
            if(Auth::check()){
                $like= MeInteresa::where(['product_id'=> $product->id,
                'user_puja_id'=>Auth::user()->id])->first();
                if ($like) {
                    $product->interesado = $like;
                }
                return $product;
            }
        });
        $totalLikesPorProyecto = MeInteresa::where('status', 1)
        ->groupBy('product_id')
        ->selectRaw('product_id, count(*) as cantidad_likes')
        ->get()
        ->pluck('cantidad_likes', 'product_id');
        return view('pujaapp.alquiler.alquiler',compact('products','solicitantesprocesados'));
    }
}
