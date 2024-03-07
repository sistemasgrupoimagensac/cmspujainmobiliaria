<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function index(){
        
    }
    public function store(Request $request)
    { 
       
        $user = new User();
        $user->name = $request->name;
        $user->email  = $request->email;
        $user->password = bcrypt( $request->password);
        $user->status = 1;            
        $user->save();
        //
        return back()->with('usercreated','Administrador nuevo creado');
 
    }
    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->email  = $request->email;
        $user->password = bcrypt( $request->password);
        $user->status = 1;  
        $user->save();
        return back()->with('userupdate','¡Administrador ha sido modificado con éxito!');
    }
    public function disable(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->status = '0';
        $user->save();
        return back()->with('userdisable','Administrador inhabilitado');
    }

    public function enable(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->status = '1';
        $user->save();
        return back()->with('userenable','Administrador habilitado');
    }
}
