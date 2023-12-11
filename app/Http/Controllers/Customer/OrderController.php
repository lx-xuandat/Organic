<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Services\OrderService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(
        private OrderService $orderService,
        private ProductService $productService
    )
    {
        $this->productService = $productService;
    }

    public function shopDetail(Request $request, string|int $slug)
    {
        // info($request->headers?->get('referer'));

        $product = $this->productService->getBySlug($slug);

        return view('organic.shop-detail', [
            'product' => $product,
        ]);
    }

    public function addToCart(Request $request)
    {
        /**
         * @var \App\Models\User $customer
         */
        $customer = auth()->user();

        $this->orderService->addToCart(
            $customer,
            $request->all()
        );

        return response()->json([
            $request->all()
        ], 200);
    }
}
