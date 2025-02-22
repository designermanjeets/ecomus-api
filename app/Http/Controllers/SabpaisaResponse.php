<?php

namespace App\Http\Controllers;

use App\Utilities\Authuntication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Enums\PaymentStatus;

class SabpaisaResponse extends Controller
{
    public function Response(Request $request)
    {
        $query = $request->input('encResponse');
        $authKey = '3HV1nEElkrSLypMw';
        $authIV = 'u5VRWK8epi03o9le';
        
           
            
        // $data = array(
        //     "clientTxnId" => '41251',
        //     "paymentMode" => 'sabpaisa',
        //     "status" =>'Pending',
        //     "amount"=>500,
        //     "uuid"  => rand(1000, 9999),
        //     "payerMobile"=>"9988554455"
            
        // );

        // DB::table('sabpaisa')->insert($data);
        
       // return redirect('https://stylexio.in/success');
        
        $AesCipher = new Authuntication();
        $decText = $AesCipher->decrypt($authKey, $authIV, $query);
        
       // echo $decText;
       
        $token = strtok($decText,"&");
       
        $i=0;

        /* response value After Decryption

        payerName=Test&payerEmail=Test@gmail.com&payerMobile=1234567890&clientTxnId=1907&payerAddress=NA&amount=10.0
        &clientCode=XXXXX&paidAmount=10.1&paymentMode=Debit Card&bankName=BOB&amountType=INR&status=FAILED&statusCode=0300&challanNumber=null
        &sabpaisaTxnId=883602112220421050&sabpaisaMessage=Sorry, Your Transaction has Failed.&bankMessage=DebitCard&bankErrorCode=null
        &sabpaisaErrorCode=null&bankTxnId=101202235510088892&transDate=Wed Dec 21 16:26:28 IST 2022&udf1=NA&udf2=NA&udf3=NA&udf4=NA&udf5=NA
        &udf6=NA&udf7=NA&udf8=NA&udf9=null&udf10=null&udf11=null&udf12=null&udf13=null&udf14=null&udf15=null&udf16=null&udf17=null&udf18=null
        &udf19=null&udf20=nulli- */

        //echo $token;

        while ($token !== false)
        {
        $i=$i+1;
        $token1=strchr($token, "=");
        $token=strtok("&");
        $fstr=ltrim($token1,"=");

        if($i==2)
            $payerEmail=$fstr;
        if($i==3)
            $payerMobile=$fstr;
        if($i==4)
            $clientTxnId=$fstr;
        if($i==5)
            $payerAddress=$fstr;
        if($i==6)
            $amount=$fstr;
        if($i==7)
            $clientCode=$fstr;
        if($i==8)
            $paidAmount=$fstr;
        if($i==9)
            $paymentMode=$fstr;
        if($i==10)
            $bankName=$fstr;
        if($i==11)
            $amountType=$fstr;
        if($i==12)
            $status=$fstr;  
        if($i==13)
                $statusCode=$fstr; 
        if($i==14)
                $challanNumber=$fstr;
        if($i==15)
                $sabpaisaTxnId=$fstr;
        if($i==16)
                $sabpaisaMessage=$fstr;
        if($i==17)
                $bankMessage=$fstr;
        if($i==18)
                $bankErrorCode=$fstr;
        if($i==19)
                $sabpaisaErrorCode=$fstr;
        if($i==20)
                $bankTxnId=$fstr;				
        if($i==21)
            $transDate=$fstr;
            if($i==22)
            $udf1=$fstr;

            if($token == true)
            {
                
            }
            
        }
        if($status =='SUCCESS'){
            
             $data = array(
            "clientTxnId" => $clientTxnId,
            "paymentMode" => $paymentMode,
            "status" =>'Pending',
            "amount"=>$amount,
            "uuid"  => $udf1,
            "payerMobile"=>$payerMobile
            
        );

        DB::table('sabpaisa')->insert($data);
        return redirect('https://stylexio.in/success');
            
        }
        
        if($status =='FAILED'){
            
              $data = array(
            "clientTxnId" => $clientTxnId,
            "paymentMode" => $paymentMode,
            "status" =>'Failed',
            "amount"=>$amount,
            "uuid"  => $udf1,
            "payerMobile"=>$payerMobile
            
        );

        DB::table('sabpaisa')->insert($data);
        
        return redirect('https://stylexio.in/failure');    
            
     
            
            
        }
        
        if($status =='ABORTED'){
            
         $data = array(
            "clientTxnId" => $clientTxnId,
            "paymentMode" => $paymentMode,
            "status" =>'Failed',
            "amount"=>$amount,
            "uuid"  => $udf1,
            "payerMobile"=>$payerMobile
            
        );

        DB::table('sabpaisa')->insert($data);
        
        return redirect('https://stylexio.in/Aborted');    

            
            
        }
     
        
        $clientCode = "DCRBP"; // Your assigned client code
        $url = "https://txnenquiry.sabpaisa.in/SPTxtnEnquiry/getTxnStatusByClientxnId";
        
            // Make POST request
            // $response = Http::asForm()->post($url, [
            //     'clientCode' => $clientCode,
            //   // 'statusTransEncData' => $query,
            //     'clientxnId'=>$clientTxnId
            // ]);
            
            $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($url, [
            'clientCode' => $clientCode,
            'statusTransEncData' => $decText
        ]);
        
            // Get response as JSON
            $result = $response->json();
        
            // Handle response
            if ($response->successful()) {
                return response()->json([
                    'status' => 'success',
                    'data' => $result
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Transaction status check failed',
                    'details' => $result
                ], 400);
            }
        
        //   $datanew = new Request([
        //         'clientTxnId' => $clientTxnId,
        //     ]);
            
        // return $this->CheckPaymentResponse($datanew);
        
        // if($status == 'SUCCESS'){
        // $datanew = new Request([
        //         'clientTxnId' => $clientTxnId,
        //     ]);
        //  $this->NewPaymentResponse($datanew);
        
        // }
       
        
        $payerName ="fsdfsdfs";
        return view('response', [
	    'status' => $status,
            'clientTxnId' => $clientTxnId,
            'amount' => $amount, 
            'paymentMode' => $paymentMode,
	    'payerName' => $payerName,
	    'payerEmail' => $payerEmail,
	    'payerMobile' => $payerMobile,
            // Add other variables as needed
        ]);
    

        
    }
    
    public function NewPaymentResponse(Request $request){
        
        if($request->clientTxnId){
             
        $response = array();
		 $response = ['R' => true,'msg'=>'SUCCESS'];
            
        return json_encode($response);
            
        }else{
            
            $response = array();
		 $response = ['R' => false,'msg'=>'no data'];
            
        return json_encode($response);
            
        }
        
    }
    
   public function CheckPaymentResponse(Request $request){
       
       
        
        if($request->uuid){
             
             if($request->payment_method=='cash_free'){
                 
                 $query = DB::table('cash_free')->where('uuid', '=', $request->uuid)->first();
                 
             }else{
                 
                 $query = DB::table('sabpaisa')->where('uuid', '=', $request->uuid)->first();
                 
             }
         
        
        if(isset($query->uuid)){
            
        // DB::table('sabpaisa')->where('uuid', $query->uuid)->update(array('status' => 'SUCCESS'));
        // DB::table('sabpaisa')->where('uuid', $query->uuid)->update(array('status' => 'Pending'));
         
         $response = array();
         $response = ['status'=>true,'MSG'=>'Please close the window'];
            
          return json_encode($response);
        }else{
             $response = array();
		 $response = ['R' => false,'msg'=>'no data'];
            
        return json_encode($response);
        }
            
        }
        
    }
    
    public function test(){
        
        $uuid = '6de45740-f83c-4ced-bacc-d3ddbd0986b1';
        
           $query = DB::table('sabpaisa')->where('uuid', '=', $uuid)->first();
          if (isset($query) && $query->status == 'SUCCESS') {
                $payment_status = PaymentStatus::SUCCESS;
               
             }else{
                 $payment_status = PaymentStatus::PENDING;
                 
             }
             
             echo $payment_status;
        
        
    }
}
