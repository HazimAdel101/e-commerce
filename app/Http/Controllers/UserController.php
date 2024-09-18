<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // Show form to create a new user
    public function create()
    {
        return view('admin.users.create');
    }

    // Store a new user
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create($validatedData);

        return redirect()->route('admin.users.index');
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
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        $user->update($validatedData);

        return redirect()->route('admin.users.index');
    }

    // Delete a user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}


