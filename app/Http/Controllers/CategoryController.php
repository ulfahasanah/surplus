<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return response()->json([
            "status" => "success",
            "data" => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        return response()->json([
            "status" => "success",
            "data" => $category,
            "message" => "Category created successfully"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return response()->json([
            "status" => "success",
            "data" => $category,
            "message" => "Category updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            "status" => "success",
            "data" => $category,
            "message" => "Category deleted successfully"
        ]);
    }
}
