<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Fetch all products
            $products = Product::all();

            return response()->json([
                'success' => true,
                'message' => 'Products fetched successfully',
                'data' => $products,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while fetching products',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
