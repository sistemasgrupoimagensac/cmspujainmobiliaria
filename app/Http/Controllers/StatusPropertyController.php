<?php

namespace App\Http\Controllers;

use App\StatusProperty;
use Illuminate\Http\Request;

class StatusPropertyController extends Controller
{
    public function index(){
        $statusProperty = StatusProperty::orderBy('id','desc')->get();
        return view ('admin.statusProperties.view',compact('statusProperty'));
    }
    public function store(Request $request){
        $statusProperty = new StatusProperty();
        $statusProperty->name = $request->name;
        $statusProperty->description = $request->description;
        $statusProperty->status = 1;
        $statusProperty->save();
        return back()->with('createstatusproperty','¡La categoria ha sido creado con éxito!');
    }
    public function update(Request $request){
        $statusProperty = StatusProperty::findOrFail($request->id);
        $statusProperty->name = $request->name;
        $statusProperty->description = $request->description;
        $statusProperty->save();
        return back()->with('updatestatusproperty','¡La categoria ha sido modificado con éxito!');
    }
    public function disable(Request $request)
    {
        $statusProperty = StatusProperty::findOrFail($request->id);
        $statusProperty->status = '0';
        $statusProperty->save();
        return back()->with('disablestatusproperty','Categoria inhabilitado');
    }

    public function enable(Request $request)
    {
        $statusProperty = StatusProperty::findOrFail($request->id);
        $statusProperty->status = '1';
        $statusProperty->save();
        return back()->with('enablestatusproperty','Categoria habilitado');
    }
    public function selectStatusProperty($id){
        $statusProperty= StatusProperty::
        where('id',$id)
        ->first();
        return response()->json($statusProperty);
    }
}
