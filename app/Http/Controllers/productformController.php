<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productformController extends Controller
{
    //create products
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        // Create the product
        $product = \App\Models\Product::create($validated);

        return response()->json([
            'message' => 'Product added successfully!',
            'product' => $product
        ], 201);
    }

    //get all products
    public function index()
    {
        $products = \App\Models\Product::all();
        return response()->json([
            'products' => $products
        ], 200);
    }
}
