<?php

namespace App\Http\Requests;

use App\Enums\AmountEnum;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\GraphQL\Exceptions\ExceptionHandler;
use Illuminate\Contracts\Validation\Validator;

class CreateCouponRequest extends FormRequest
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
        $coupon = [
            'title' => ['required'],
            'description' => ['required'],
            'code'  => ['required', 'min:5','max:20', 'unique:coupons,code,NULL,id,deleted_at,NULL'],
            'type' => ['required', 'in:free_shipping,fixed,percentage'],
            'min_spend' => ['required', 'numeric', 'min:0'],
            'is_unlimited' => ['required','min:0','max:1'],
            'usage_per_coupon' => ['nullable','numeric'],
            'usage_per_customer' => ['nullable','numeric'],
            'status' => ['required','min:0','max:1'],
            'is_expired' => ['required','min:0','max:1'],
            'is_first_order' => ['min:0','max:1'],
            'is_apply_all' => ['required','min:0','max:1'],
            'exclude_products.*' => ['nullable','exists:products,id,deleted_at,NULL'],
            'products' => ['required_if:is_apply_all,==,0','exists:products,id,deleted_at,NULL'],
            'start_date' => ['nullable','date'],
            'end_date' => ['nullable','date', 'after:start_date']
        ];

        if (Request::input('type') == AmountEnum::PERCENTAGE) {
           return array_merge($coupon, ['amount' => ['required', 'regex:/^([0-9]{1,2}){1}(\.[0-9]{1,2})?$/']]);
        }

        return $coupon;
    }

    public function messages()
    {
        return [
            'amount.regex' => __('validation.amount_percent_between'),
            'type.in' => __('validation.coupon_type_free_shipping_or_fixed_percente'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new ExceptionHandler($validator->errors()->first(), 422);
    }
}
