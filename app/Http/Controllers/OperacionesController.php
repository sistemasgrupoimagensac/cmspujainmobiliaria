<?php

namespace App\Http\Controllers;

use App\Deparment;
use App\District;
use App\Province;
use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function index(){
        $distrito = District::
        orderBy('id','desc')
        ->get();
        $provinces =  Province::
        orderBy('id','desc')
        ->get();
        $departments = Deparment::
        orderBy('id','desc')
        ->get();
        return view('user.principal',compact('distrito'));
    }
}
