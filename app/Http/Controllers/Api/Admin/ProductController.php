<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!$request->user()->can('product_show')){
            return response()->json([
               'status' => false,
               'code' => 'NOT_ALLOWED',
               'message' => 'You Dont Have Access To See Products',
               ],
               405);
            }
        $products = Product::all();

        return response()->json([
            'status' => true,
            'code' => 'SUCCESS',
            'data' => [
                'products' => $products,
            ],
             ],
            200); 
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            try{
                if(!$request->user()->can('product_create')){
                    return response()->json([
                       'status' => false,
                       'code' => 'NOT_ALLOWED',
                       'message' => 'You Dont Have Access To Create Product',
                       ],
                       405);
                    }
                //Validated
                $validateProduct = Validator::make($request->all(),
                [
                'name' => 'required',
                'buying_price' => 'required',
                'quantity' => 'required'
                ]);
        
                if($validateProduct->fails()){
                    return response()->json([
                        'status' => false,
                        'code' => 'VALIDATION_ERROR',
                        'message' => 'validation error',
                        'error' => $validateProduct->errors()],
                        401);
                }

                $product = Product::create([
                    'name' => $request->name,
                    'buying_price' => $request->buying_price,
                    'quantity' => $request->quantity,
                    'size' => $request->size, 
                    'color' => $request->color,
                    'image' => $request->image,
                    'description' => $request->description,
                    'status' => 1,
                ]);


                return response()->json([
                    'status' => true,
                    'code' => 'PRODUCT_CREATED',
                    'message' => 'Product Created Successfully!',
                    'data' => [
                        'product' => $product
                    ]],
                    200);

        }catch(\Throwable $th){
            return response()->json([
                'status' => false,
                'code' => 'SERVER_ERROR',
                'message' => $th->getMessage(),
                'error' => $validateProduct->errors()],
                500);
        }
    
    }


    /**
     * Display the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            if(!$request->user()->can('product_show')){
                return response()->json([
                   'status' => false,
                   'code' => 'NOT_ALLOWED',
                   'message' => 'You Dont Have Access To See Product',
                   ],
                   405);
                }

            $product = Product::find($id);
            if(isset($product)){
                return response()->json([
                    'status' => true,
                    'code' => 'SUCCESS',
                    'data' => [
                        'products' => $product,
                    ],
                    ],
                    200); 
            }else{
                return response()->json([
                    'status' => false,
                    'code' => 'PRODUCT_NOT_FOUND',
                    'message' => 'Product Not Exist',
                    ],
                    404);
            }

        }catch(\Throwable $th){
            return response()->json([
                'status' => false,
                'code' => 'SERVER_ERROR',
                'message' => $th->getMessage()],
                500);
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
           if(!$request->user()->can('product_update')){
             return response()->json([
                'status' => false,
                'code' => 'NOT_ALLOWED',
                'message' => 'You Dont Have Access To Update Product',
                ],
                405);
           }
            
            $product = Product::find($id);
            if(isset($product)){
                //Validated
                $validateProduct = Validator::make($request->all(),
                [
                'name' => 'required',
                'buying_price' => 'required',
                'quantity' => 'required'
                ]);
                
                $product->name = $request->name;
                $product->buying_price = $request->buying_price;
                $product->quantity = $request->quantity;
                $product->size = $request->size;
                $product->color = $request->color;
                $product->image = $request->image;
                $product->description = $request->description;
                $product->status = 1;
                    


                $res = $product->save();

                return response()->json([
                    'status' => true,
                    'code' => 'PRODUCT_UPDATED',
                    'message' => 'Product Updated Successfully!',
                    ],
                    200); 
            }else{
                return response()->json([
                    'status' => false,
                    'code' => 'PRODUCT_NOT_FOUND',
                    'message' => 'Product Not Exist',
                    ],
                    404);
            }

        }catch(\Throwable $th){
            return response()->json([
                'status' => false,
                'code' => 'SERVER_ERROR',
                'message' => $th->getMessage()],
                500);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try{
            
                Product::where('id',$id)->delete();
                return response()->json([
                    'status' => true,
                    'code' => 'PRODUCT_DELETED',
                    'message' => 'Product Deleted Successfully!',
                    200]);

    }catch(\Throwable $th){
        return response()->json([
            'status' => false,
            'code' => 'SERVER_ERROR',
            'message' => $th->getMessage(),],
            500);
    }

    }
}
