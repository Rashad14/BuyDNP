<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $data = $this->all();
        $data['products'] = json_decode($data['products'], true);
        $this->replace($data);

        $productIds = array_column($data['products'], 'id');

        return [
            'country' => 'required|string',
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
                    $product = Product::find($productIds[array_search($attribute, array_column($this->input('products'), 'price', 'id'))]);
                    if ($product && $value != $product->price) {
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
    }
}
