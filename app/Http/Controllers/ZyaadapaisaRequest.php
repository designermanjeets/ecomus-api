<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Utilities\Authuntication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ZyaadapaisaRequest extends Controller
{
    public function zyaadapaisainitiatepayment(Request $request)
    {
        
        $data = '{
            "api_username": "surajcashfree1049",
            "api_password": "d91Sp6eB"
    
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
                    "redirect_url": "https://fashionwithtrends.com/success",
                    "callback_url": "https://api.fashioncarft.com/public/api/cashfree-webhook" }';

            
        $ch = curl_init("https://api.zyaadapay.com/v1/payin/createorder");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "X-Custom-Header: CustomValue",
            "Authorization: Bearer $token",
            "APIKey: rebjDWdVy0DSY2KgQNZSgLF4nHM0fO@579OApK4@ZzqTf6dn8E",
        ]);
        
        $data_fromzyaadapay = curl_exec($ch);
        curl_close($ch);
       $newtoken = "Bearer " . $token;
        $res_zyaada = json_decode($data_fromzyaadapay);
        
        $client_id = rand(1000, 9999);
         $insertdata = array(
            "clientTxnId" => $client_id,
            "order_id" => $order_id,
            "paymentMode" => 'Zyaada Pay',
            "status" =>'Pending',
            "amount"=>$request->total,
            "uuid"  => $request->uuid,
            'token' => $newtoken,
            "payerMobile"=>$request->phone
            
        );
        DB::table('zyaada_pay')->insert($insertdata);
       
         $response = array();
		 $response = ['R' => true,'msg'=>'SUCCESS','data'=>$res_zyaada];
            
        return json_encode($response);
            
        }else{
            
         $response = array();
		 $response = ['R' => false,'msg'=>'No Data',];
            
        return json_encode($response);
            
        }
     
            
    }
    
    public function zyaadapaisatest(){
        
        $data = '{
                    "currency": "INR",
                    "amount": "10",
                    "order_id": "BHDT2KLJQIUS241123P",
                    "customer_name": "mukeshkatoch",
                    "customer_email": "mukeshkatoch558@gmail.com",
                    "customer_phone": "2983489342",
                    "pay_mode": "upi_trust",
                    "redirect_url": "https://stylexio.in/success",
                    "callback_url": " your callback notification URL" }';
            
        $ch = curl_init("https://api.zyaadapay.com/v1/payin/createorder");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "X-Custom-Header: CustomValue",
            "APIKey: rebjDWdVy0DSY2KgQNZSgLF4nHM0fO@579OApK4@ZzqTf6dn8E",
            "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJHYXRld2F5QVBJQWNjZXNzVG9rZW4iLCJuYW1lIjoic3VyYWpjYXNoZnJlZTEwNDkiLCJqdGkiOiIyZmFhNTI2NS0xMDVkLTRkZjAtYjUyZC0xMTA3MmIxYTVhMGUiLCJpYXQiOjE3NDA2NzY1MjcsImV4cCI6MTc0MDY3ODMyNywiaXNzIjoiR2F0ZXdheUFQSSIsImF1ZCI6IkdhdGV3YXlBUEkifQ.RPc9LYXUbOcqdcqwhFs97yPgAhwtiWB2efPiIxlDwTU"
        ]);
        
        $data_fromzyaadapay = curl_exec($ch);
        curl_close($ch);
       
        $res_zyaada = json_decode($data_fromzyaadapay);
        
          echo '<pre>';
        print_r($res_zyaada);die;
    }
    
    public function cashfreewebhook(Request $request){
        
     // $result = json_decode($request);
        
         $insertdata = array(
            
            "order_id" => $request->order_id,
            "amount" => $request->amount,
            "status" =>$request->Status,
            "utr"=>$request->rrn,
           
            
        );
        
         DB::table('cash_free_temp')->insert($insertdata);
         $response = array();
		 $response = ['R' => true,'msg'=>'SUCCESS'];
            
        return json_encode($response);
        $uuid = '6b270b5a-b1ea-492f-bf68-41d2b7c85235';
        $query = DB::table('zyaada_pay')->where('uuid', '=', $uuid)->first();
        
    if (isset($query) && $query->status == 'Pending') {
            
         $data = '{
             "order_id": "'.$query->order_id.'"
             
         }';
              
        $ch = curl_init("https://api.zyaadapay.com/v1/paymentstatus/paymentstatuscheck");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "X-Custom-Header: CustomValue",
            "Authorization: $query->token",
            "APIKey: rebjDWdVy0DSY2KgQNZSgLF4nHM0fO@579OApK4@ZzqTf6dn8E",
        ]);
        
         $data_response = curl_exec($ch);
        curl_close($ch);
        $res_zyaada = json_decode($data_response);
        return $res_zyaada;
    }
    
}
    
        
}
