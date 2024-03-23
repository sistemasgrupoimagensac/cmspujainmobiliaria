<?php

namespace App\Http\Controllers;

use App\Category;
use App\District;
use App\ImageProduct;
use App\Product;
use App\StatusProperty;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'name' => 'required',
            'price'   => 'required|numeric',
            'rooms'   => 'required|integer',
            'square_meters'   => 'required|integer',
            'bathrooms'   => 'required|integer',
            'price'   => 'required',
            'price'   => 'required|integer',
        ], [
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
        $product->user_id = Auth::user()->id;
        $product->status_property_id = $request->status_property_id;
        $product->district_id = $request->district_id;
        $product->rooms = $request->rooms;
        $product->garage = $request->garage;
        $product->square_meters = $request->square_meters;
        $product->bathrooms = $request->bathrooms;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = 1;
        $product->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('products', $imageName, 'public');
        
            $image_product = new ImageProduct();
            $image_product->url_image = $imageName;
            $image_product->product_id = $product->id;
            $image_product->status = 1;
            $image_product->save();
        }
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
    public function selectImageProduct($id){
        $images = ImageProduct::where('product_id',$id)
        ->where('status',1)
        ->get();
        return response()->json($images);
    }
    public function uploadImageProduct(Request $request){
        $image_product = new ImageProduct();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('products', $imageName, 'public');
            $image_product->url_image = $imageName;
            $image_product->product_id = $request->product_id;
            $image_product->status = 1;
            $image_product->save();
            $data = [
                'image_url' => asset('storage/products/' . $imageName),
                'fecha' => $image_product->created_at->format('Y-m-d H:i:s'),
                'product_id'=>$request->product_id,
            ];
    
            return response()->json([
                'success' => true,
                'data' => $data,
                'message' => 'La imagen se ha subido correctamente.'
            ]);
        }
    
        return response()->json([
            'success' => false,
            'message' => 'No se ha enviado ninguna imagen.'
        ]);
    }
    public function disableImage(Request $request){
        $product = ImageProduct::findOrFail($request->id);
        $product->status = '0';
        $product->save();
        return response()->json(['success' => true]);
    }
}
