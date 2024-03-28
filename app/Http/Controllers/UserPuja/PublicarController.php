<?php

namespace App\Http\Controllers\UserPuja;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicarController extends Controller
{
    public function index(){
        return view('user.publicar');
    }
}
