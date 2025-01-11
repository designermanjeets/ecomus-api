<?php

namespace App\SMS;

use App\Enums\RoleEnum;
use App\Helpers\Helpers;
use App\Http\Traits\MessageTrait;
use Illuminate\Notifications\Notification;
use App\Notifications\PlaceOrderNotification;

class PlaceOrderSMS
{
     use MessageTrait;

    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  Notification  $notification
     * @return void
     */
      public function send($notifiable, PlaceOrderNotification $placeOrdNotification)
      {
            return $placeOrdNotification->toSend($notifiable);
      }

      public function isEnabled()
      {
            $settings = Helpers::getSettings();
            return ($settings['activation']['send_sms'] && $settings['sms_methods']['config']['place_order_sms']);
      }

      public function getMessage($roleName, $order)
      {
            switch($roleName) {
                  case RoleEnum::CONSUMER:
                        return "Your order has been successfully placed. Order ID: #{$order->order_number}. Thank you for choosing us.";
                  case RoleEnum::VENDOR:
                        return "A consumer has ordered from your catalog. Order ID: #{$order->order_number}. Please ensure prompt fulfillment.";
                  case RoleEnum::ADMIN:
                        return "An order has been placed successfully. Order ID: #{$order->order_number}. Your prompt attention is requested.";
            }
      }

      public function sendSMS($notifiable, $roleName, $order)
      {
            if ($this->isEnabled()) {
                  $message = [
                        'to' =>'+'.$notifiable->country_code.$notifiable->phone,
                        'body' => $this->getMessage($roleName, $order)
                  ];
                  return $this->sendMessage($message,Helpers::getDefaultSMSMethod());
            }
      }
}
