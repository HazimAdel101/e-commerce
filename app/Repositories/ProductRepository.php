<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProductRepository implements ProductRepositoryInterface
{
    public function store($data)
    {
        // Handle Image Upload
        $fileNameToStore = 'noimage.jpg';
        if ($data->hasFile('photo')) {
            $fileWithExt = $data->file('photo')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $extension = $data->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $data->file('photo')->move(public_path('photos/users'), $fileNameToStore);
        }
    
        // Create record
        $user = new User();
        $user->photo = $fileNameToStore;
        $user->name = $data->name;
        $user->email = $data->email;
        $user->phone = $data->phone;
        $user->password = Hash::make($data->password);
        $user->save();
    
        // Return the created user instance
        return $user;
    }
    

    public function update($id, $data)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Handle Image Upload
        if ($data->hasFile('photo')) {
            $fileWithExt = $data->file('photo')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $extension = $data->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            // Delete the old photo if it's not 'noimage.jpg'
            if ($user->photo != 'noimage.jpg') {
                $oldPhotoPath = public_path('photos/users/' . $user->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath); // Delete the old file
                }
            }

            // Move the new photo to the public directory
            $data->file('photo')->move(public_path('photos/users'), $fileNameToStore);
        } else {
            // Keep the current photo if no new photo is uploaded
            $fileNameToStore = $user->photo;
        }

        // Update user record
        $user->photo = $fileNameToStore;
        $user->name = $data->name;
        $user->email = $data->email;
        $user->phone = $data->phone;

        // Only update password if a new one is provided
        if ($data->filled('password')) {
            $user->password = Hash::make($data->password);
        }

        $user->save();
    }

    public function delete($id)
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
    }
}