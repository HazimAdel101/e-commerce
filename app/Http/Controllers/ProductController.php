<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{

    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
{
    $this->productRepository = $productRepository;
}

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // Show form to create a new product
    public function create()
    {
        return view('admin.products.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|min:3|max:100',
            'price' => 'required|numeric|min:0',
        ]);

        $this->productRepository->store($request);

        // Corrected redirection: Use back() or redirect to a specific route
        return redirect()->route('admin.products.index')->with('success', 'Record created successfully');
    }



    // Display a specific product
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    // Show form to edit an existing product
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // Update an existing product
    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|min:3|max:100',
            'price' => 'required|numeric|min:0',
        ]);

        $this->productRepository->update($id, $request);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }


    // Delete a product
    public function destroy($id)
    {
        $this->productRepository->delete($id);

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    }
}
