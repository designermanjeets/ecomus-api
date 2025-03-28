<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Utilities\Authuntication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ZyaadapaisaRequestgaj extends Controller
{
    public function zyaadapaisainitiatepaymentgaj(Request $request)
    {
        
        $data = '{
            "api_username": "gajlaxmicashfree1053",
            "api_password": "BRRq4Jvp"
    
        }';
     
        $ch = curl_init("https://api.zyaadapay.com/v1/authenticate/user");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "X-Custom-Header: CustomValue"
        ]);
        
        $data = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($data);
        
        $order_id = rand(100000, 999999);
       
        $orderStatus = isset($res->status) ? $res->status : 'false';
    //   https://api.fashioncarft.com/public/api/product
        if($orderStatus =='1'){
            
          $token = $res->token;
            $data = '{
                    "currency": "INR",
                    "amount": "'.$request->total.'",
                    "order_id": "'.$request->uuid.'",
                    "customer_name": "'.$request->name.'",
                    "customer_email": "'.$request->email.'",
                    "customer_phone": "'.$request->phone.'",
                    "pay_mode": "upi_trust",
                    "redirect_url": "https://gajlaxmifashion.in/success",
                    "callback_url": "https://api.fashioncarft.com/public/api/cashfree-webhook-gaj" }';

            
        $ch = curl_init("https://api.zyaadapay.com/v1/payin/createorder");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "X-Custom-Header: CustomValue",
            "Authorization: Bearer $token",
            "APIKey:  GoKNwul!E1njFikcU#YQ7nfpRLfFgTDLmVGgfS5W!DSeqraPs@",
        ]);
        
        $data_fromzyaadapay = curl_exec($ch);
        curl_close($ch);
       $newtoken = "Bearer " . $token;
        $res_zyaada = json_decode($data_fromzyaadapay);
        
        $client_id = rand(1000, 9999);
         $insertdata = array(
            "clientTxnId" => $client_id,
            "order_id" => $order_id,
            "paymentMode" => 'Zyaada Pay Gaj',
            "status" =>'Pending',
            "amount"=>$request->total,
            "uuid"  => $request->uuid,
            'token' => $newtoken,
            "payerMobile"=>$request->phone
            
        );
        DB::table('zyaada_pay_gaj')->insert($insertdata);
       
         $response = array();
		 $response = ['R' => true,'msg'=>'SUCCESS','data'=>$res_zyaada];
            
        return json_encode($response);
            
        }else{
            
         $response = array();
		 $response = ['R' => false,'msg'=>'No Data',];
            
        return json_encode($response);
            
        }
     
            
    }
    
    
    public function cashfreewebhookgaj(Request $request){
        
     // $result = json_decode($request);
        
         $insertdata = array(
            
            "order_id" => $request->order_id,
            "amount" => $request->amount,
            "status" =>$request->Status,
            "utr"=>$request->rrn,
           
            
        );
        
         DB::table('cash_free_temp_gaj')->insert($insertdata);
         $response = array();
		 $response = ['R' => true,'msg'=>'SUCCESS'];
            
        return json_encode($response);
    
    
}
    
        
}
