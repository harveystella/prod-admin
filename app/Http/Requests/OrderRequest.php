<?php

namespace App\Http\Requests;

use App\Models\Coupon;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'products' => ['required', 'array'],
            'additional_service_id' => 'nullable|array',
            'pick_at' => ['required'],
            'address_id' => ['required', 'exists:addresses,id'],
            'coupon_id' => ['nullable','exists:' . (new Coupon())->getTable() . ',id']
        ];
    }

    public function messages()
    {
        return [
            'address_id.required' => 'The address fuild is required.',
        ];
    }
}
