<?php

namespace App\Http\Controllers\UserPuja;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Auth;

class MisAvisosController extends Controller
{
    public function index(){

        $mis_avisos = Product::where('user_id',Auth::user()->id)
        ->get();
        return view('user.mis-avisos',compact('mis_avisos'));
    }
}
