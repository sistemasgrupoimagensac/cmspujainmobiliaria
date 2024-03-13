<?php

namespace App\Http\Controllers;

use App\Category;
use App\District;
use App\Product;
use App\StatusProperty;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request){
        $districts = District::orderBy('id','desc')->get();
        $status_property = StatusProperty::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();
        $products = Product::orderBy('id','desc')
        ->where(function($query) use($request){
            if ($request->criterio && $request->search) {
                switch ($request->criterio) {
                    case 'name':
                        $query->where('name', 'LIKE', $request->search . '%');
                        break;

                    case 'rooms':
                        $query->where('rooms', '=', $request->search);
                        break;
                }
            }
        })
        ->where(function($query)use($request){
            if($request->status_property_id){
                $query->where('status_property_id',$request->status_property_id);
            }
        })
        ->where(function ($query) use ($request) {
            if ($request->category_id) {
                $query->where('category_id', $request->category_id);
            }
        })
        ->where(function ($query) use ($request){
            if($request->district_id){
                $query->where('district_id',$request->district_id);  
            }
        })
        ->paginate(10);

        $criterio = $request->get('criterio');
        $search = $request->get('search');
        $districtId = $request->get('district_id');
        $statusPropertyId = $request->get('status_property_id');
        $categoryId = $request->get('category_id');

        return view('admin.products.view',compact('products','districts','status_property','categories','criterio','search','districtId','statusPropertyId','categoryId'));
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'image' => 'nullable|max:1000|mimetypes:image/*',
            'name' => 'required',
            'price'   => 'required|numeric',
            'rooms'   => 'required|integer',
            'square_meters'   => 'required|integer',
            'bathrooms'   => 'required|integer',
            'price'   => 'required',
            'price'   => 'required|integer',
        ], [
            'image.max' => 'La imágen no debe pesar más de 1MB',
            'image.mimetypes' => 'La imágen no es un formato aceptable',
            'product.required'   => 'El nombre del producto es requerido',
            'price.required'    => 'El precio es requerido',
            'price.numeric'     => 'El precio debe ser un número',
            'rooms.required'    => 'El stock es requerido',
            'rooms.integer'     => 'El stock debe ser un número entero',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->status_property_id = $request->status_property_id;
        $product->district_id = $request->district_id;
        $product->rooms = $request->rooms;
        $product->garage = $request->garage;
        $product->square_meters = $request->square_meters;
        $product->bathrooms = $request->bathrooms;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->description = $request->description;

        $product->status = 1;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Specify the 'public' disk for storing the image
            $image->storeAs('products', $imageName, 'public');
            $product->image = $imageName;
        }
        $product->save();
        return back()->with('createProduct','¡El producto ha sido creado con éxito!');
    }
    public function update(Request $request){
        $product = Product::findOrFail($request->id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->status_property_id = $request->status_property_id;
        $product->district_id = $request->district_id;
        $product->rooms = $request->rooms;
        $product->garage = $request->garage;
        $product->square_meters = $request->square_meters;
        $product->bathrooms = $request->bathrooms;
        $product->price = $request->price;
        $product->status = 1;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Specify the 'public' disk for storing the image
            $image->storeAs('products', $imageName, 'public');
            $product->image = $imageName;
        }
        $product->description = $request->description;
        $product->save();
        return back()->with('updateProduct','¡El producto  ha sido modificado con éxito!');
    }
    public function disable(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->status = '0';
        $product->save();
        return back()->with('productdisable','Producto  inhabilitado');
    }

    public function enable(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->status = '1';
        $product->save();
        return back()->with('productenable','Producto habilitado');
    }
    public function selectProduct($id){
        $product= Product::
        where('id',$id)
        ->first();
        return response()->json($product);
    }
}
