<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class OrderPlaceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $data = $this->all();

        // Check if $data has 'products' key before accessing it
        if (isset($data['products'])) {
            $data['products'] = json_decode($data['products'], true);
            $this->replace($data);
            $productIds = array_column($data['products'], 'id');
        } else {
            $productIds = [];
        }

        return [
            'country' => 'required|string',
            'phone' => 'required|integer|regex:/^[0-9\s()+-]+$/',
            'address' => 'required|string',
            'apartment' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string',
            'order_notes' => 'nullable|string',
            'products' => 'required|array|min:1',
            'products.*.id' => [
                'required',
                Rule::in(Product::query()->pluck('id')->toArray())
            ],
            'products.*.quantity' => 'required|integer|min:1',
            'products.*.price' => [
                'required',
                function ($attribute, $value, $fail) use ($productIds) {
                    $attributeIndex = array_search($attribute, array_column($this->input('products'), 'price', 'id'));
                    $product = Product::find($productIds[$attributeIndex] ?? null);
                    if ($product && $attributeIndex !== false && $value != ($product->price * 100)) {
                        dd($product->price);
                        $fail('Invalid product price');
                    }
                }
            ],
            'total' => [
                'required',
                function ($attribute, $value, $fail) use ($data) {
                    $total = array_reduce($data['products'], function ($carry, $product) {
                        return $carry + ($product['quantity'] * $product['price']);
                    }, 0);
                    if ($value != $total) {
                        $fail('Invalid cart total');
                    }
                }
            ]
        ];

        $validator = $this->validator->make($this->all(), $this->rules());

        if ($validator->fails()) {
            throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
        }
    }
}
