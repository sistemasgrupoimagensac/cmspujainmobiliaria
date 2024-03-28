<?php

namespace App\Http\Controllers\UserPuja;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MeInteresa;
use Illuminate\Support\Facades\Auth;

class InteresadosController extends Controller
{
    public function index(){
        $favoritos = MeInteresa::where('status',1)
        ->where('user_id',Auth::user()->id)
        ->paginate(20);
        return view('user.interesados');
    }
}
