<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductImage;
use App\Http\Requests\ProductImageRequest;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $productImage = ProductImage::with('image', 'product')->latest()->paginate(10);
        return response()->json([
            "status" => "success",
            "data" => $productImage,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(ProductImageRequest $request)
    {
        $productImage = ProductImage::create($request->all());
        return response()->json([
            "status" => "success",
            "data" => $productImage,
            "message" => "Product Image created successfully"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(ProductImageRequest $request,  ProductImage $productImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
