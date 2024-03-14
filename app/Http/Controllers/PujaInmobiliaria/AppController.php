<?php

namespace App\Http\Controllers\PujaInmobiliaria;

use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MeInteresa;
use App\Product;
use Illuminate\Support\Facades\Auth;

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
    public function alquiler(Request $request){
        $products = Product::orderBy('id','desc')
        ->where(function ($query) use ($request){
            if($request->category_id){
                $query->where('category_id',$request->category_id);  
            }
        })
        ->where('status_property_id',2)
        ->where('status',1)
        ->get();
        return view('pujaapp.alquiler.alquiler',compact('products'));
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
        return view('pujaapp.remate.remate',compact('products'));
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
            $like->user_puja_id = Auth::user()->id;
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
        $distritos= District::orderBy('id','desc')->get();
        $detalle = Product::where('id',$product_id)
        ->first();
        return view('pujaapp.detalle.detalle',['detalle'=>$detalle],compact('distritos'));
    }
    
}
