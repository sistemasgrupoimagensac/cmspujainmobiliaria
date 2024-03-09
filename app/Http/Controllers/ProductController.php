<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->get();
        return view('admin.products.view',compact('products'));
    }
    public function store(Request $request){
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->status_property_id = $request->status_property_id;
        $product->district_id = $request->district_id;
        $product->rooms = $request->rooms;
        $product->garage = $request->garage;
        $product->square_meters = $request->square_meters;
        $product->bathrooms = $request->bathrooms;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->image = $request->image;
        $product->description = $request->description;

        $product->status = 1;
        $product->save();
        return back()->with('createProduct','¡El producto ha sido creado con éxito!');
    }
    public function update(Request $request,$id){
        $product = Product::findOrFail($request->$id);
        $product->category_id = $request->category_id;
        $product->status_property_id = $request->status_property_id;
        $product->district_id = $request->district_id;
        $product->rooms = $request->rooms;
        $product->garage = $request->garage;
        $product->square_meters = $request->square_meters;
        $product->bathrooms = $request->bathrooms;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->save();
        return back()->with('updateProduct','¡El producto  ha sido modificado con éxito!');
    }
    public function disable(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->status = '0';
        $product->save();
        return back()->with('disableProduct','Producto  inhabilitado');
    }

    public function enable(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->status = '1';
        $product->save();
        return back()->with('enableProduct','Producto habilitado');
    }
    public function selectProduct($id){
        $product= Product::
        where('id',$id)
        ->first();
        return response()->json($product);
    }
}
