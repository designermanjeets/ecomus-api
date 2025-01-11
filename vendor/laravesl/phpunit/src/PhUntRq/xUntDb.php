<?php

namespace Laravesl\Phpunit\PhUntRq;

use Illuminate\Foundation\Http\FormRequest;

class xUntDb extends FormRequest
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
        $stConDb = [];
        $scDot = [
            xPhpLib('ZGF0YWJhc2UuREJfSE9TVA==') => 'required', 'max:255', 'regex:/^\S*$/u',
            xPhpLib('ZGF0YWJhc2UuREJfUE9SVA==') => 'required', 'regex:/^\S*$/u', 'max:10',
            xPhpLib('ZGF0YWJhc2UuREJfVVNFUk5BTUU=') => 'required', 'regex:/^\S*$/u', 'max:255',
            xPhpLib('ZGF0YWJhc2UuREJfREFUQUJBU0U=') => 'required', 'regex:/^\S*$/u', 'max:255',
        ];

        $scSpat = [
            xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==') => 'required', 'max:255',
            xPhpLib('YWRtaW4ubGFzdF9uYW1l') => 'required', 'max:255',
            xPhpLib('YWRtaW4uZW1haWw=') => 'required', 'email', 'max:255',
            xPhpLib('YWRtaW4ucGFzc3dvcmQ=') => 'required', 'min:8',
            xPhpLib('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') => 'required', 'confirmed', 'min:8',
        ];

        if (scDotPkS()) {
            $stConDb = array_merge($stConDb, $scDot);
        }

        if (scSpatPkS() && !$this->has(xPhpLib('aXNfaW1wb3J0X2RhdGE='))) {
            $stConDb = array_merge($stConDb, $scSpat);
        }

        return $stConDb;
    }

    public function attributes()
    {
        return [
            xPhpLib('ZGF0YWJhc2UuREJfSE9TVA==') => xPhpLib('aG9zdA=='),
            xPhpLib('ZGF0YWJhc2UuREJfUE9SVA==') => xPhpLib('cG9ydA=='),
            xPhpLib('ZGF0YWJhc2UuREJfVVNFUk5BTUU=') => xPhpLib('ZGF0YWJhc2UgdXNlcm5hbWU='),
            xPhpLib('ZGF0YWJhc2UuREJfUEFTU1dPUkQ=') => xPhpLib('ZGF0YWJhc2UgcGFzc3dvcmQ='),
            xPhpLib('ZGF0YWJhc2UuREJfREFUQUJBU0U=') => xPhpLib('ZGF0YWJhc2UgbmFtZQ=='),
            xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==') => xPhpLib('Zmlyc3QgbmFtZQ=='),
            xPhpLib('YWRtaW4ubGFzdF9uYW1l') => xPhpLib('bGFzdCBuYW1l'),
            xPhpLib('YWRtaW4uZW1haWw=') => xPhpLib('ZW1haWw='),
            xPhpLib('YWRtaW4ucGFzc3dvcmQ=') => xPhpLib('cGFzc3dvcmQ='),
            xPhpLib('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') =>  xPhpLib('cGFzc3dvcmQgY29uZmlybWF0aW9uIA==')
        ];
    }

    public function messages()
    {
        return [
            xPhpLib('ZGF0YWJhc2UuREJfSE9TVC5yZWdleA==') => xPhpLib('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gaG9zdCBuYW1l'),
            xPhpLib('ZGF0YWJhc2UuREJfUE9SVC5yZWdleA==') => xPhpLib('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gcG9ydCBudW1iZXI='),
            xPhpLib('ZGF0YWJhc2UuREJfVVNFUk5BTUUucmVnZXg=') => xPhpLib('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gdXNlcm5hbWU='),
            xPhpLib('ZGF0YWJhc2UuREJfREFUQUJBU0UucmVnZXg=') => xPhpLib('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gZGF0YWJhc2UgbmFtZQ=='),
        ];
    }
}
