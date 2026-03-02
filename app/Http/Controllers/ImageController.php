<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string'
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/equipment/' . $request->category), $imageName);
            
            return response()->json([
                'success' => true,
                'path' => '/images/equipment/' . $request->category . '/' . $imageName
            ]);
        }

        return response()->json(['success' => false]);
    }
}