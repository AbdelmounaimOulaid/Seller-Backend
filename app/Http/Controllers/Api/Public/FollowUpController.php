<?php

namespace App\Http\Controllers\Api\Public;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOrderRequest;
use App\Repositories\Interfaces\OrderRepositoryInterface;

class FollowUpController extends Controller
{

    private $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }


    public function index(Request $request) {

        $sortBy = $request->input('sort_by');
        $sortOrder = $request->input('sort_order');
        $perPage = $request->input('per_page');

        $orders = $this->orderRepository->paginate($perPage, $sortBy, $sortOrder);
        $statistics = $this->orderRepository->followUpStatistics(1);

        return response()->json([
            'code' => 'SUCCESS',
            'data' => [
                'statistics' => $statistics,
                'orders' => $orders
            ]
            ]);
    }


    public function update(UpdateOrderRequest $request, $id) {

        try {
            $order = $this->orderRepository->update($id, $request->all());

            return [
                'code' => 'SUCCESS',
                'data' => [
                    'order' => $order
                ]
            ];

        } catch (\Throwable $th) {

            // rollback transaction on error
            DB::rollBack();

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
