<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
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
        'photo' => 'required|photo|mimes:jpeg,png,jpg,gif|max:2048',
        'name' => 'required|string|min:3|max:100',
        'email' => 'required|email',
        'phone' => 'required',
        'password' => 'required',
    ]);

    $this->userRepository->store($request);

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
        'photo' => 'nullable|photo|mimes:jpeg,png,jpg,gif|max:2048',
        'name' => 'required|string|min:3|max:100',
        'email' => 'required|email',
        'phone' => 'required',
        'password' => 'nullable|string|min:6',
    ]);

    $this->userRepository->update($id, $request);

    return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
}
    

    // Delete a user
    public function destroy($id)
{
    $this->userRepository->delete($id);

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
