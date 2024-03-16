<?php

namespace App\Http\Controllers\PujaInmobiliaria;

use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImageProduct;
use App\MeInteresa;
use App\Product;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','desc')
        ->where('status',1)
        ->get();

        $solicitantesprocesados = $products->map(function($product){
            $product->interesado = null;
            if(Auth::guard('puja')->check()){
                $like= MeInteresa::where(['product_id'=> $product->id,
                'user_puja_id'=>Auth::guard('puja')->user()->id])->first();
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
        // dd($products);
        return view('pujaapp.inicio.inicio',compact('products'));
    }
    public function alquiler(Request $request){
        $products = Product::orderBy('id','desc')
        ->where(function ($query) use ($request){
            if($request->category_id){
                $query->where('category_id',$request->category_id);  
            }
        })
        ->where('status_property_id',1)
        ->where('status',1)
        ->get();
        $solicitantesprocesados = $products->map(function($product){
            $product->interesado = null;
            if(Auth::guard('puja')->check()){
                $like= MeInteresa::where(['product_id'=> $product->id,
                'user_puja_id'=>Auth::guard('puja')->user()->id])->first();
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
    public function remate(Request $request){
        $products = Product::orderBy('id','desc')
        ->where(function ($query) use ($request){
            if($request->category_id){
                $query->where('category_id',$request->category_id);  
            }
        })
        ->where('status_property_id',2)
        ->where('status',1)
        ->get();
        $solicitantesprocesados = $products->map(function($product){
            $product->interesado = null;
            if(Auth::guard('puja')->check()){
                $like= MeInteresa::where(['product_id'=> $product->id,
                'user_puja_id'=>Auth::guard('puja')->user()->id])->first();
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
        return view('pujaapp.remate.remate',compact('products','solicitantesprocesados'));
    }
    public function meInteresa(Request $request)
    {   
        $like= MeInteresa::where(['product_id'=> $request->product_id,
        'user_puja_id'=>Auth::guard('puja')->user()->id,])->first();
        if($like!=null){
               $like->status = $like->status == 1 ? 0 : 1;
               $like->save();
        }
        else{
            $like = new MeInteresa();
            $like->product_id = $request->product_id;
            $like->status = 1;
            $like->user_puja_id = Auth::guard('puja')->user()->id;
            $like->save();
        }
        $response=[
            'like_actual'=>$like
        ];
        return response()->json($response);
    }
    public function dislike(Request $request){
        $like = MeInteresa::where([
            'product_id' => $request->product_id,
            'user_puja_id' => Auth::guard('puja')->user()->id,
        ])->first();
    
        if ($like != null) {
            $like->status = 0; // Cambiar el status a 0
            $like->save();
        }
    
        $response = [
            'like_actual' => $like
        ];
    
        return response()->json($response);
    }
    public function detalle(Request $request,$product_id){
        $images_product = ImageProduct::orderBy('id','desc')
        ->where('product_id',$product_id)
        ->where('status',1)
        ->get();
        $distritos= District::orderBy('id','desc')->get();
        $detalle = Product::where('id',$product_id)->first();

        if(Auth::guard('puja')->check()){
            $like= MeInteresa::where(
                ['product_id'=> $detalle->id,
                'user_puja_id'=>Auth::guard('puja')->user()->id]
                )->first();
                $detalle->interesado=$like;
        }

        $totalLikesPorPrestamo = MeInteresa::where('status', 1)
        ->groupBy('product_id')
        ->selectRaw('product_id, count(*) as cantidad_likes')
        ->get()
        ->pluck('cantidad_likes', 'product_id');

        return view('pujaapp.detalle.detalle',['detalle'=>$detalle],compact('distritos','images_product','totalLikesPorPrestamo'));
    }
    
    
}
