<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Utilities\Authuntication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SabpaisaRequest extends Controller
{
    public function initiatePayment(Request $request)
    {
       
        session_start();

        $encData = null;

         $clientCode = 'ATUL99'; 
        $username = 'stylexio.info_20198'; 
        $password = 'ATUL99_SP20198'; 
        $authKey = '3HV1nEElkrSLypMw';
        $authIV = 'u5VRWK8epi03o9le';
        
        
        /* $clientCode = 'DCRBP'; 
        $username = 'userph.jha_3036'; 
        $password = 'DBOI1_SP3036'; 
        $authKey = '0jeOYcu3UnfmWyLC'; 
        $authIV = 'C28LAmGxXTqmK0QJ';*/

        $payerName = $request->name;
        $payerEmail = $request->email;
        $payerMobile = $request->phone;
        $payerAddress = $request->address;
        
        $uuid = $request->uuid;
        
        $clientTxnId = rand(1000, 9999);
        $amount = $request->total;
        //$amount = 1;
        $amountType = 'INR';
        $mcc = 33111;
        $channelId = 'W';
        $callbackUrl = route('payment-response');
        //$callbackUrl = route('new-payment-response');
        
        


        //$encData = "?clientCode=".$clientCode."&transUserName=".$username."&transUserPassword=".$password."&payerName=".$payerName.
           // "&payerMobile=".$payerMobile."&payerEmail=".$payerEmail."&payerAddress=".$payerAddress."&clientTxnId=".$clientTxnId.
          //  "&amount=".$amount."&amountType=".$amountType."&udf1=".$uuid."&mcc=".$mcc."&channelId=".$channelId."&callbackUrl=".$callbackUrl;
            
            
             $query = "";
        $query .= "?clientCode=" . trim($clientCode);
        $query .= "&transUserName=" . trim($username);
        $query .= "&transUserPassword=" . trim($password);
        $query .= "&authKey=" . trim($authKey);
        $query .= "&authIV=" . trim($authIV);
        $query .= "&payerName=" . trim($payerName);
        $query .= "&payerEmail=" . trim($payerEmail);
        $query .= "&payerMobile=" . trim($payerMobile);
        $query .= "&payerAddress=" . trim($payerAddress);
        $query .= "&clientTxnId=" . trim($clientTxnId);
        $query .= "&amount=" . trim($amount);
        $query .= "&amountType=" . trim($amountType);
        $query .= "&channelId=" . trim($channelId);
        $query .= "&mcc=" . trim($mcc);
        $query .= "&callbackUrl=" . trim($callbackUrl);
        $query .= "&udf1=" . trim($uuid);

        // Encrypt the query string
       // $encryptedQuery = self::encryptString($query, $sabPaisaMember['authIV'], $sabPaisaMember['authKey']);

       // return $encryptedQuery;


        $AesCipher = new Authuntication();
        $data = $AesCipher->encrypt($authKey, $authIV, $query);
        

    $data = "<form action='https://securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1' method='post'><input type='hidden' name='encData' value='$data' id='frm1'><input type='hidden' name='clientCode' value='$clientCode' id='frm2'><input type='submit' id='submitButton' name='submit'></form>";
        
         $response = array();
		 $response = ['R' => true,'data' => $data];
            
        return json_encode($response);
        
            
    }
    

    
        
}
