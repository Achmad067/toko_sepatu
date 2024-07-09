<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageModel;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        // Validasi file upload
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan file gambar ke storage
        $path = $request->file('image')->store('images');

        // Simpan informasi gambar ke database
        $image = new ImageModel;
        $image->filename = $path;
        $image->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Image uploaded successfully',
            'data' => $image,
        ], 200);
    }
}

