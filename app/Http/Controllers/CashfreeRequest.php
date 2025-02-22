<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Utilities\Authuntication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CashfreeRequest extends Controller
{
    public function cashfree(Request $request)
    {
        $client_id = rand(1000, 9999);
        $order_id = rand(100000, 999999);
        
        $data = '{
            "order_currency": "INR",
            "order_amount": '.$request->total.',
            "order_id": "'.$order_id.'",
            "customer_details": {
                "customer_id": "'.$client_id.'",
                "customer_phone": "'.$request->phone.'"
            },
            "order_meta": {
                "return_url": "https://stylexio.in/success",
                "notify_url": "https://www.cashfree.com/devstudio/webhook_url",
                "payment_methods": "upi"
            }
        }';

    
//     $new = array(
        
//     'order_currency' => 'INR',
//     'order_amount' => 100,
//     'order_id' => 'TTT12345099211',
//     'customer_details' => array(
//         'customer_id'=>'45545',
//         'customer_phone'=>'9989111289'
//     ),
//     'order_meta' => array(
//         'return_url'=>'https://www.cashfree.com/devstudio/redirect_url',
//         'notify_url'=>'https://www.cashfree.com/devstudio/webhook_url',
//         'payment_methods'=>'upi',
        
//         ),
    
// );
    
     
        $ch = curl_init("https://api.cashfree.com/pg/orders");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "X-Custom-Header: CustomValue",
            "x-client-id: 9160151d8c9f3c4d9e68e9e0ab510619",
            "x-client-secret: cfsk_ma_prod_9594cc9db4a7bcb5921da2b2e0ec2a87_bdb4c28c",
            "x-api-version: 2021-05-21"
        ]);
        
        $data = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($data);
        
        
        $orderStatus = isset($res->order_status) ? $res->order_status : 'Not Available';
        
        if($orderStatus =='ACTIVE'){
            
            
             $insertdata = array(
            "clientTxnId" => $client_id,
            "paymentMode" => 'Cash Free',
            "status" =>'Pending',
            "amount"=>$request->total,
            "uuid"  => $request->uuid,
            "payerMobile"=>$request->phone
            
        );

        DB::table('cash_free')->insert($insertdata);
       
         $response = array();
		 $response = ['R' => true,'msg'=>'SUCCESS','data'=>$res];
            
        return json_encode($response);
            
        }else{
              
         $response = array();
		 $response = ['R' => false,'msg'=>'No Data',];
            
        return json_encode($response);
            
        }
     
            
    }
    

    
        
}
