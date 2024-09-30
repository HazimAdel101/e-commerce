<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Repositories\productRepositoryInterface;

class ProductController extends Controller
{

    protected $productRepository;

    public function __construct(productRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function try()
    {
        return view('user.index');
    }

    // Show form to create a new user
    public function create()
    {
        return view('admin.users.create');
    }

    // Store a new user
    public function store(Request $request)
{
    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'name' => 'required|string|min:3|max:100',
        'email' => 'required|email',
        'phone' => 'required',
        'password' => 'required',
    ]);

    $this->productRepository->store($request);

    // Corrected redirection: Use back() or redirect to a specific route
    return redirect()->route('admin.users.index')->with('success', 'Record created successfully');
}



    // Display a specific user
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    // Show form to edit an existing user
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Update an existing user
    public function update(Request $request, $id)
{
    $request->validate([
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'name' => 'required|string|min:3|max:100',
        'email' => 'required|email',
        'phone' => 'required',
        'password' => 'nullable|string|min:6',
    ]);

    $this->productRepository->update($id, $request);

    return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
}
    

    // Delete a user
    public function destroy($id)
{
    $this->productRepository->delete($id);

    return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
}


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
