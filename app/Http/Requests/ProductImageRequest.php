<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductImageRequest extends FormRequest
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
                Rule::unique('product_images')->where('image_id', $this->image_id)
                    ->where('product_id', $this->product_id)
            ],
            'image_id' => [
                'required', 
                Rule::exists('images', 'id'),
                Rule::unique('product_images')->where('image_id', $this->image_id)
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
