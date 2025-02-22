<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Utilities\Authuntication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PayinRequest extends Controller
{
    public function Payin(Request $request)
    {
        
        //  $data = [
        //     "data" => "DLHEBF8JBXaLnn41EL9ITfLF3CTzrAqtDeaom4J6AgmzYeVF+rqlaW887gMT6BchYfAqa9Pf",
        //     "authTag" => "gOJSMk+ADhuknkAFUeEJlw==",
        // ];
        
        // $ch = curl_init("https://preprod-collectbot-v2.neokred.tech/payin/api/v2/t1/external/upi/qr/generate/intent");
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        // curl_setopt($ch, CURLOPT_HTTPHEADER, [
        //     "Content-Type: application/json",
        //     "X-Custom-Header: CustomValue",
        //     "client_secret:d49c3017-577c-4124-be51-1fc87a064312",
        //     "serviceid: aad5bb61-62d3-405d-a230-52e516a7724d"
        // ]);
        
        // $response = curl_exec($ch);
        // curl_close($ch);
        // echo $response;
        
        // die;


        $keyWithIv = "e8b13f91d611fce1aa1944650a4409d40891c8699a6afbbb1ac6621c520895b9940a478be20390457464c76a";
        
          $data = [
            "amount" => "3",
            "remark" => "newtestdata",
            "refId" => 'testmukeshdd'
        ];
        
        if (!is_string($data)) {
        $data = json_encode($data); // Convert to JSON string if it's not a string
    }
        
    $key = hex2bin(substr($keyWithIv, 0, 64)); // First 64 hex chars (32 bytes) for key
    $iv = hex2bin(substr($keyWithIv, 64)); // Remaining 24 hex chars (12 bytes) for IV

    $cipher = openssl_encrypt(
        $data,
        'aes-256-gcm',
        $key,
        OPENSSL_RAW_DATA,
        $iv,
        $tag
    );

    // Return the encrypted data and the authentication tag
    return [
        'encryptedData' => base64_encode($cipher),
        'authTag' => base64_encode($tag),
    ];
       
        
            
    }
    

    
        
}
