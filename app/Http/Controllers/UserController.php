<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function index(Request $request)
    {
        $users = User::orderBy('id','desc')
        ->where(function($query) use($request){
            if ($request->criterio && $request->search) {
                switch ($request->criterio) {
                    case 'name':
                        $query->where('name', 'LIKE', $request->search . '%');
                        break;                                
                    case 'email':
                        $query->where('email', 'LIKE', $request->search . '%');
                        break;
                }
            }
        })
        ->get();
        return view('admin.admins.view',compact('users'));
    }
    public function store(Request $request)
    { 
        $user = new User();
        $user->name = $request->name;
        $user->email  = $request->email;
        $user->password = bcrypt( $request->password);
        $user->status = 1;            
        $user->save();
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
    public function selectUser($id){
        $user= User::
        where('id',$id)
        ->first();
        return response()->json($user);
    }
    public function changePassword(Request $request){
        // dd($request);
        $user = User::findOrFail($request->id);
        $user->password = bcrypt($request->passwordchangepassword);
        $user->save();
        return back()->with('userupdate','¡Ha sido modificado con éxito!');
    }
}
