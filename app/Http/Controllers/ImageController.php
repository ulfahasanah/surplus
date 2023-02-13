<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $images = Image::latest()->paginate(10);
        return response()->json([
            "status" => "success",
            "data" => $images,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(ImageRequest $request)
    {
        $image = Image::create($request->all());
        return response()->json([
            "status" => "success",
            "data" => $image,
            "message" => "Image created successfully"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(ImageRequest $request, Image $image)
    {
        $image->update($request->all());

        return response()->json([
            "status" => "success",
            "data" => $image,
            "message" => "Image updated successfully"
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return response()->json([
            "status" => "success",
            "data" => $image,
            "message" => "Image deleted successfully"
        ]);
    }
}
