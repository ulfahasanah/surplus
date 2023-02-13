<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryProductRequest;
use App\Models\CategoryProduct;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $categoryProducts = CategoryProduct::with('category', 'product')->latest()->paginate(10);
        return response()->json([
            "status" => "success",
            "data" => $categoryProducts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(CategoryProductRequest $request)
    {
        $categoryProduct = CategoryProduct::create($request->all());
        return response()->json([
            "status" => "success",
            "data" => $categoryProduct,
            "message" => "Category Product created successfully"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(CategoryProductRequest $request, CategoryProduct $categoryProduct)
    {
        $categoryProduct->update($request->all());
        return response()->json([
            "status" => "success",
            "data" => $categoryProduct,
            "message" => "Category Product updated successfully"
        ]);
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
