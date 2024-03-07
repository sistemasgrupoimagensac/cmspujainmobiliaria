<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

    }
    public function store(Request $request){
        $product = new Product();
        $product->category = $request->category;
        $product->description = $request->description;
        $product->status = 1;
        $product->save();
        return back()->with('createCategory','¡La categoria ha sido creado con éxito!');
    }
    public function update(Request $request,$id){
        $product = Product::findOrFail($request->$id);
        $product->category = $request->category;
        $product->description = $request->description;
        $product->save();
        return back()->with('updateCategory','¡La categoria ha sido modificado con éxito!');
    }
    public function disable(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->status = '0';
        $product->save();
        return back()->with('disableCategory','Categoria inhabilitado');
    }

    public function enable(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->status = '1';
        $product->save();
        return back()->with('enableCategory','Categoria habilitado');
    }
}
