<?php

namespace App\Http\Controllers\PujaInmobiliaria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginFormUser(){
        return view('admin.login.login-user');
    }
    public function signInUser(Request $request)
    {
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if (Auth::guard('puja')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Las credenciales proporcionadas son incorrectas.',
            ])->withInput();
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        // Redirige al usuario a la página de inicio de sesión
        return redirect('/login-user');
    }
    public function showRegisterFormUser(){
        return view('admin.login.sign-up');
    }
}
