<?php

namespace App\Http\Controllers;

use App\StatusProperty;
use Illuminate\Http\Request;

class StatusPropertyController extends Controller
{
    public function index(){

    }
    public function store(Request $request){
        $statusProperty = new StatusProperty();
        $statusProperty->name = $request->name;
        $statusProperty->description = $request->description;
        $statusProperty->status = 1;
        $statusProperty->save();
        return back()->with('createstatusProperty','¡La categoria ha sido creado con éxito!');
    }
    public function update(Request $request,$id){
        $statusProperty = StatusProperty::findOrFail($request->$id);
        $statusProperty->name = $request->name;
        $statusProperty->description = $request->description;
        $statusProperty->save();
        return back()->with('updatestatusProperty','¡La categoria ha sido modificado con éxito!');
    }
    public function disable(Request $request)
    {
        $statusProperty = StatusProperty::findOrFail($request->id);
        $statusProperty->status = '0';
        $statusProperty->save();
        return back()->with('disablestatusProperty','Categoria inhabilitado');
    }

    public function enable(Request $request)
    {
        $statusProperty = StatusProperty::findOrFail($request->id);
        $statusProperty->status = '1';
        $statusProperty->save();
        return back()->with('enablestatusProperty','Categoria habilitado');
    }
    public function selectStatusProperty($id){
        $statusProperty= StatusProperty::
        where('id',$id)
        ->first();
        return response()->json($statusProperty);
    }
}
