<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class SaleController extends Controller
{

    /**
     * Display all Sales.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->user()->can('show_all_sales')) {
            return response()->json(
                [
                    'status' => false,
                    'code' => 'NOT_ALLOWED',
                    'message' => 'You Dont Have Access To See Products',
                ],
                405
            );
        }
        $relationship = ['items' => ['product_variation.warehouse', 'product'], 'factorisations'];
        $orders = Order::orderBy('id', 'DESC')->with($relationship)->get();

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {

            if (!$request->user()->can('create_sale')) {
                return response()->json(
                    [
                        'status' => false,
                        'code' => 'NOT_ALLOWED',
                        'message' => 'You Dont Have Access To Create Sale',
                    ],
                    405
                );
            }


            //Validated
            $saleValidator = Validator::make(
                $request->all(),
                [
                    'fullname' => 'required',
                    'phone' => 'required',
                    'city' => 'required',
                    'adresse' => 'required',
                    'price' => 'required|integer',
                    'orderItems.*.product_id' => 'required',
                    'orderItems.*.product_ref' => 'required',
                    'orderItems.*.product_variation_id' => 'required',
                    'orderItems.*.quantity' => 'required'
                ]
            );

            if ($saleValidator->fails()) {
                return response()->json(
                    [
                        'status' => false,
                        'code' => 'VALIDATION_ERROR',
                        'message' => 'validation error',
                        'error' => $saleValidator->errors()
                    ],
                    401
                );
            }

            DB::beginTransaction();
            $sale = Order::create([
                'fullname' => $request->fullname,
                'phone' => $request->phone,
                'city' => $request->city,
                'adresse' => $request->adresse,
                'price' => $request->price,
                'counts_from_warehouse' => $request->counts_from_warehouse
            ]);

            // foreach ($request->orderItems as $orderItem) {
            //     OrderItem::create([
            //         'order_id' => $sale->id,
            //         'product_id' => $orderItem['product_id'],
            //         'product_ref' => $orderItem['product_ref'],
            //         'product_variation_id' => $orderItem['product_variation_id'],
            //         'quantity' => $orderItem['quantity']
            //     ]);
            // }

            $existingItems = collect($request->orderItems)->groupBy(function ($item) {
                return  $item['product_id'] . '_' . $item['product_ref'] . '_' . $item['product_variation_id'];
            })->map(function ($groupedItems) {
                $sumQuantity = collect($groupedItems)->sum('quantity');
                $firstItem = $groupedItems[0];
                $firstItem['quantity'] = $sumQuantity;
                return $firstItem;
            })->values()->toArray();

            foreach ($existingItems as $orderItem) {
                OrderItem::create([
                    'order_id' => $sale->id,
                    'product_id' => $orderItem['product_id'],
                    'product_ref' => $orderItem['product_ref'],
                    'product_variation_id' => $orderItem['product_variation_id'],
                    'quantity' => $orderItem['quantity']
                ]);
            }
            DB::commit();

            $sale = Order::with(['items' => ['product_variation.warehouse', 'product']])->where('id', $sale->id)->first();

            return response()->json([
                'status' => true,
                'code' => 'SALE_ADDED',
                'message' => 'Sale Added Successfully!',
                'data' => [
                    'sale' => $sale
                ]
            ], 200);
        } catch (\Throwable $th) {

            return response()->json(
                [
                    'status' => false,
                    'code' => 'SERVER_ERROR',
                    'message' => $th->getMessage()
                ],
                500
            );
        }
    }


    /**
     * Reset orders.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saleReset(Request $request)
    {
        try {
            if (!$request->user()->can('reset_sale')) {
                return response()->json(
                    [
                        'status' => false,
                        'code' => 'NOT_ALLOWED',
                        'message' => 'You Dont Have Access To Reset Orders',
                    ],
                    405
                );
            }

            $orderIds = $request->input('ids');
            $orders = Order::whereIn('id', $orderIds)->get();
            foreach ($orders as $order) {
                $order->agente_id = null;
                $order->upsell = null;
                $order->confirmation = null;
                $order->affectation = null;
                $order->note = null;
                $order->note_d = null;
                $order->delivery = null;
                $order->reported_agente_date = null;
                $order->reported_agente_note = null;
                $order->reported_delivery_date = null;
                $order->reported_delivery_note = null;
                $order->delivery_date = null;
                $order->factorisation_id = null;
                $order->save();
            }

            return response()->json(
                [
                    'status' => true,
                    'code' => 'SUCCESS',
                    'message' => 'Orders Reset Successfully',
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => false,
                    'code' => 'SERVER_ERROR',
                    'message' => $th->getMessage(),
                ],
                500
            );
        }
    }
}
