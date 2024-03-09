<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category :: orderBy('id','desc')->get();
        return view('admin.categories.view',compact('categories'));
    }
    public function store(Request $request){
        $category = new Category();
        $category->name = $request->category;
        $category->description = $request->description;
        $category->status = 1;
        $category->save();
        return back()->with('createcategory','¡La categoria ha sido creado con éxito!');
    }
    public function update(Request $request){
        $category = Category::findOrFail($request->id);
        $category->name = $request->category;
        $category->description = $request->description;
        $category->save();
        return back()->with('updatecategory','¡La categoria ha sido modificado con éxito!');
    }
    public function disable(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->status = '0';
        $category->save();
        return back()->with('disablecategory','Categoria inhabilitado');
    }

    public function enable(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->status = '1';
        $category->save();
        return back()->with('enablecategory','Categoria habilitado');
    }
    public function selectCategory($id){
        $category= Category::
        where('id',$id)
        ->first();
        return response()->json($category);
    }
}
