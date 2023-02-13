<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CategoryProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_id' => [
                'required', 
                Rule::exists('products', 'id'),
                Rule::unique('category_products')->where('category_id', $this->category_id)
                    ->where('product_id', $this->product_id)
            ],
            'category_id' => [
                'required', 
                Rule::exists('categories', 'id'),
                Rule::unique('category_products')->where('category_id', $this->category_id)
                    ->where('product_id', $this->product_id)
            ]
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'message' => $validator->errors()->first()
        ], 422));
    }
}
