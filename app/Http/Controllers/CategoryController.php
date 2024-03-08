<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

    }
    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = 1;
        $category->save();
        return back()->with('createCategory','¡La categoria ha sido creado con éxito!');
    }
    public function update(Request $request,$id){
        $category = Category::findOrFail($request->$id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return back()->with('updateCategory','¡La categoria ha sido modificado con éxito!');
    }
    public function disable(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->status = '0';
        $category->save();
        return back()->with('disableCategory','Categoria inhabilitado');
    }

    public function enable(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->status = '1';
        $category->save();
        return back()->with('enableCategory','Categoria habilitado');
    }
    public function selectCategory($id){
        $category= Category::
        where('id',$id)
        ->first();
        return response()->json($category);
    }
}
