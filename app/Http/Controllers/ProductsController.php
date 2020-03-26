<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);
    }

    
    public function create()
    {
        return view('products.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required|max=5',
            'image' => 'required|image',
            'description' => 'required|string'
        ]);

        $product = new Product;

        $product_image = $request->image;
        if($request->hasfile('image')){
            $product_image_name = $request->id.'.'.$product_image->getClientOriginalExtension();
            $product_image->move(public_path("uploads/product/$request->id"), $product_image_name);
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $product_image_name;
        $product->save();
        return redirect()->route('products.index');
    }
    
  
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('products.edit', ['product' => Product::find($id) ]);
    }

 
     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|max=5',
        ]);
        
        if($request->hasfile('image')){
            $product_image_name = $request->id.'.'.$product_image->getClientOriginalExtension();
            $product_image->move(public_path("uploads/product/$request->id"), $product_image_name);
            $product->save();
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        
        $product->save();
     
        return redirect()->route('products.index');
    }

   
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        return redirect()->route('products.index')();
    }
}
