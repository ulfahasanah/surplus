<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'product_id' => [
                'required', 
                Rule::exists('products', 'id')
        ],
            'category_id' => [
                'required', 
                Rule::exists('categories', 'id')
        ]
        ]);
        if (!$validator->fails()) {
            $categoryProduct = CategoryProduct::create($request->all());
            return response()->json([
                "status" => "success",
                "data" => $categoryProduct,
                "message" => "Category Product created successfully"
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "data" => $validator->errors()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
