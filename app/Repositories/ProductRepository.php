<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProductRepository implements ProductRepositoryInterface
{
    public function store($data)
    {
        // Handle photo Upload
        $fileNameToStore = 'nophoto.jpg';
        if ($data->hasFile('photo')) {
            $fileWithExt = $data->file('photo')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $extension = $data->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $data->file('photo')->move(public_path('photos/products'), $fileNameToStore);
        }
    
        // Create record
        $product = new Product();
        $product->photo = $fileNameToStore;
        $product->name = $data->name;
        $product->price = $data->price;
        $product->save();
    
        // Return the created product instance
        return $product;
    }
    

    public function update($id, $data)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Handle photo Upload
        if ($data->hasFile('photo')) {
            $fileWithExt = $data->file('photo')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $extension = $data->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            // Delete the old photo if it's not 'nophoto.jpg'
            if ($product->photo != 'nophoto.jpg') {
                $oldPhotoPath = public_path('photos/products/' . $product->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath); // Delete the old file
                }
            }

            // Move the new photo to the public directory
            $data->file('photo')->move(public_path('photos/products'), $fileNameToStore);
        } else {
            // Keep the current photo if no new photo is uploaded
            $fileNameToStore = $product->photo;
        }

        // Update product record
        $product->photo = $fileNameToStore;
        $product->name = $data->name;
        $product->price = $data->price;

        $product->save();
    }

    public function delete($id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Check if the product has a photo that is not the default 'nophoto.jpg'
        if ($product->photo && $product->photo != 'nophoto.jpg') {
            // Define the photo path
            $photoPath = public_path('photos/products/' . $product->photo);

            // Check if the photo exists and delete it
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }

        // Delete the product from the database
        $product->delete();
    }
}