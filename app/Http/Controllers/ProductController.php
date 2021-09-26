<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{


    // Get Product List - Get Method.
    public function index()
    {
        $products = Product::get();

         return response()->json([
            'status' => '200',
            'message' => 'Product List',
            'data' => $products
         ]);

    }



    // Store Product - Post Method.
    public function create(Request $request)
    {

        // Input Request Validaiton.
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        // Create Data.

        $data = Product::create($request->all());

        // Send Response.
        return response()->json([
            'status' => '200',
            'message' => 'Product created successfully.',
            'data' => $data

        ]);
    }


    // Update Single Product by ID. - Get Method
    public function show($productID)
    {
        if(Product::where('id', $productID)->exists()){

            $singleProduct = Product::find($productID);

            return response()->json([
                'status' => '1',
                'message' => 'Product Details Found.',
                'data' => $singleProduct
    
            ]);


        }else{
            return response()->json([
                'status' => '0',
                'message' => 'Product Not Found.',
    
            ], 404);
        }
    }


    // Show Single Product by ID - Put Method.

    public function update(Request $request, $productID)
    {
        if(Product::where('id', $productID)->exists()){

            $product = Product::find($productID);

              // Input Request Validaiton.
            $request->validate([
                'name' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'price' => 'required',
            ]);


            $data = $product->fill($request->all())->save();

            return response()->json([
                'status' => '1',
                'message' => 'Product Details Found.',
                'data' => $data
    
            ]);

        }else{
            return response()->json([
                'status' => '0',
                'message' => 'Product Not Found.',
    
            ], 404);
        }
    }


    /**
     * Delete Product - Get Method.
     */
    public function delete($productID)
    {
        if(Product::where('id', $productID)->exists()){

            $product = Product::destroy($productID);

            return response()->json([
                'status' => '0',
                'message' => 'Product Deleted Successfully.',
                'data' => $product
    
            ], 200);

        }else{
             return response()->json([
                'status' => '0',
                'message' => 'Product Not Found.',
    
            ], 404);
        }
    }
}
