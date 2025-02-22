<?php

namespace  App\Payments;

use Exception;
use App\Models\Order;
use App\Enums\PaymentStatus;
use App\Http\Traits\PaymentTrait;
use App\GraphQL\Exceptions\ExceptionHandler;
use Illuminate\Support\Facades\DB;

class Cashfree {

  use PaymentTrait;

  public static function status(Order $order, $request, $uuid)
  {
    try {
      $orderTransactions = $order->order_transactions()->where('order_id', $order->id)->first();
      if ($orderTransactions) {
        $orderTransactions->delete();
      }

    //  $order = self::updateOrderPaymentMethod($order, $request->payment_method);
      //return self::updateOrderPaymentStatus($order, PaymentStatus::PENDING);
      
         $query = DB::table('cash_free')->where('uuid', '=', $uuid)->first();
          if (isset($query) && $query->status == 'Pending') {
               DB::table('cash_free')->where('uuid', $query->uuid)->update(array('status' => 'SUCCESS'));
                $payment_status = PaymentStatus::COMPLETED;
                
             }else{
                 $payment_status = PaymentStatus::PENDING;
                 
             }
   
      $order = self::updateOrderPaymentMethod($order, $request->payment_method);
      return self::updateOrderPaymentStatus($order, $payment_status);
      
      

    } catch (Exception $e) {

      throw new ExceptionHandler($e->getMessage(), $e->getCode());
    }
  }
}
