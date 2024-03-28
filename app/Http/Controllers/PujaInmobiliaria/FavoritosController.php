<?php

namespace App\Http\Controllers\PujaInmobiliaria;

use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MeInteresa;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoritosController extends Controller
{
    public function index(Request $request){
        $distritos = District::orderBy('id','desc')->get();

        $favoritos = MeInteresa::where('status',1)
        ->where('user_id',Auth::user()->id)
        ->paginate(20);
        return view('pujaapp.favoritos.favoritos',compact('favoritos','distritos'));
    }
    public function cambiarEstado(Request $request)
    {
        $like = MeInteresa::find($request->id_like);

        if ($like != null) {
            $like->estado = 0; // Cambiar el estado a 0
            $like->save();
        }

        $response = [
            'like_actual' => $like
        ];

        return response()->json($response);
    }
}
