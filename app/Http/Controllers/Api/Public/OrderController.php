<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductAgente;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->user()->can('order_show')) {
            return response()->json(
                [
                    'status' => false,
                    'code' => 'NOT_ALLOWED',
                    'message' => 'You Dont Have Access To See Products',
                ],
                405
            );
        }
        $product_id = ProductAgente::where('agente_id',$request->user()->id)->value('product_id');
        $product_name = Product::find($product_id)->value('name');
        $orders = Order::where('product_name',$product_name)->get();


        return response()->json(
            [
                'status' => true,
                'code' => 'SUCCESS',
                'data' => [
                    'orders' => $orders,
                ],
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
