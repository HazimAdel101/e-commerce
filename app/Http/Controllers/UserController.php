<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

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
        // Validate request inputs
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
        ]);

        // Handle Image Upload
        if ($request->hasFile('photo')) {
            // Get file with extension
            $fileWithExt = $request->file('photo')->getClientOriginalName();

            // Get just file name
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);

            // Get just extension
            $extension = $request->file('photo')->getClientOriginalExtension();

            // File name to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            // Upload image to public/photos directory
            $request->file('photo')->move(public_path('photos/users'), $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        // Create record
        $record = new User();
        $record->photo = $fileNameToStore;
        $record->name = $request->name;
        $record->email = $request->email;
        $record->phone = $request->phone;
        $record->password = Hash::make($request->password);;
        $record->save();

        return redirect('admin.users')->back()->with('success', 'Record created successfully');
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
        // Find the user by ID
        $user = User::findOrFail($id);
    
        // Validate request inputs
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'nullable|string|min:6',
        ]);
    
        // Check if photo was uploaded
        if ($request->hasFile('photo')) {
            // Get file with extension
            $fileWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
    
            // Delete the old photo if it's not 'noimage.jpg'
            if ($user->photo != 'noimage.jpg') {
                $oldPhotoPath = public_path('photos/users/' . $user->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath); // Delete the old file
                }
            }
    
            // Move the new photo to the public directory
            $request->file('photo')->move(public_path('photos/users'), $fileNameToStore);
        } else {
            // Keep the current photo if no new photo is uploaded
            $fileNameToStore = $user->photo;
        }
    
        // Update user record
        $user->photo = $fileNameToStore;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
    
        // Only update password if a new one is provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        $user->save();
    
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }
    

    // Delete a user
    public function destroy($id)
{
    // Find the user by ID
    $user = User::findOrFail($id);

    // Check if the user has a photo that is not the default 'noimage.jpg'
    if ($user->photo && $user->photo != 'noimage.jpg') {
        // Define the photo path
        $photoPath = public_path('photos/users/' . $user->photo);

        // Check if the photo exists and delete it
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }
    }

    // Delete the user from the database
    $user->delete();

    // Redirect back to the users list with a success message
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
