<?php

namespace Laravesl\Phpunit\PhUntRq;

use Illuminate\Foundation\Http\FormRequest;

class xUntR extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            xPhpLib('ZW52YXRvX3VzZXJuYW1l') => 'required',
            xPhpLib('bGljZW5zZQ==') => 'required|regex:/^([a-f0-9]{8})-(([a-f0-9]{4})-){3}([a-f0-9]{12})$/i',
        ];
    }

    public function attributes()
    {
        return [
            xPhpLib('ZW52YXRvX3VzZXJuYW1l') => xPhpLib('RW52YXRvIFVzZXJuYW1l'),
            xPhpLib('bGljZW5zZQ==') => xPhpLib('TGljZW5zZQ=='),
        ];
    }

    public function messages()
    {
        return [
            xPhpLib('bGljZW5zZS5yZWdleA==') => xPhpLib('SW52YWxpZCBwdXJjaGFzZSBjb2Rl'),
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
