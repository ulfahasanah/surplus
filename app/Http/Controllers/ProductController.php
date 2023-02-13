<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return response()->json([
            "status" => "success",
            "data" => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        return response()->json([
            "status" => "success",
            "data" => $product,
            "message" => "Product created successfully"
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return response()->json([
            "status" => "success",
            "data" => $product,
            "message" => "Product updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            "status" => "success",
            "data" => $product,
            "message" => "Product deleted successfully"
        ]);
    }
}
