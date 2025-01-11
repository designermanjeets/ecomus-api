<?php

namespace Laravesl\Phpunit\PhUntRq;

use Illuminate\Foundation\Http\FormRequest;

class xUntVR extends FormRequest
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
        $scSpat = [
            xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==') => 'required|max:255',
            xPhpLib('YWRtaW4ubGFzdF9uYW1l') => 'required', 'max:255',
            xPhpLib('YWRtaW4uZW1haWw=') => 'required', 'email', 'max:255',
            xPhpLib('YWRtaW4ucGFzc3dvcmQ=') => 'required', 'confirmed', 'min:8',
            xPhpLib('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') => 'required',
        ];

        $strVeR = [
            xPhpLib('bGljZW5zZQ==') => 'required', 'regex:/^([a-f0-9]{8})-(([a-f0-9]{4})-){3}([a-f0-9]{12})$/i',
            xPhpLib('ZW52YXRvX3VzZXJuYW1l') => 'required'
        ];

        if (scSpatPkS()) {
            $strVeR = array_merge($strVeR, $scSpat);
        }

        return $strVeR;
    }

    public function attributes()
    {
        return [
            xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==') => xPhpLib('Zmlyc3QgbmFtZQ=='),
            xPhpLib('YWRtaW4ubGFzdF9uYW1l') => xPhpLib('bGFzdCBuYW1l'),
            xPhpLib('YWRtaW4uZW1haWw=') => xPhpLib('ZW1haWw='),
            xPhpLib('YWRtaW4ucGFzc3dvcmQ=') => xPhpLib('cGFzc3dvcmQ='),
            xPhpLib('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') => xPhpLib('Y29uZmlybWF0aW9uIHBhc3N3b3Jk'),
            xPhpLib('bGljZW5zZQ==') => xPhpLib('bGljZW5zZQ=='),
            xPhpLib('ZW52YXRvX3VzZXJuYW1l') => xPhpLib('ZW52YXRvIHVzZXJuYW1l'),
        ];
    }

    public function messages()
    {
        return [
            xPhpLib('bGljZW5zZS5yZWdleA==') => xPhpLib('SW52YWxpZCBwdXJjaGFzZSBjb2Rl'),
        ];
    }
}
