<?php

namespace App\Http\Controllers;

use App\UserPuja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserPujaController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'birthdate' => 'required|date',
        ]);
    
        // Comprobar si la validación falla
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user_puja = new UserPuja();
        $user_puja->name = $request->name;
        $user_puja->email = $request->email;
        $user_puja->password =bcrypt( $request->password);
        $user_puja->birthdate = $request->birthdate;
        $user_puja->document = 1;
        $user_puja->type_document = 1;
        $user_puja->status = 1;
        $user_puja->save();
        return redirect('/login-user');
    }
}
