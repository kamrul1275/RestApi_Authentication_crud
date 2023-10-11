<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
//use Validate;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::latest()->get();
        // return response()->json($products);

        $products = Product::all();
        return response()->json([
        "success" => true,
        "message" => "Product List",
        "data" => $products
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {   

   
          $products = new Product();
          $products->name= $request->name;
          $products->detail= $request->detail;
          $products->save();
            
          $msg="Product added succesfully";
          return response()->json(['success'=>$msg],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }






    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // $products = Product::find($id);
        // return response()->json($products);

        $product = Product::all();
        return response()->json([
        "success" => true,
        "message" => "Product List",
        "data" => $product
        ]);
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $product)
    {
  
        $product = $request->all();

        return  $product;

        $products = Product::find($id);
        $products->name= $request->name;
        $products->detail= $request->detail;
        $products->save();
          
        $msg="Product update succesfully";
        return response()->json(['success'=>$msg],200);

  
        // $product->update($request->all());
      
        // $product->save();

        // $msg="Product Update succesful";
        // return response()->json( ['success'=>$msg],200);
      
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
       
        $product->delete();
        $msg="Product Delete succesfully";
        return response()->json( ['success'=>$msg],200);
    
    }
}
