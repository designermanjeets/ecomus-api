<?php

namespace App\SMS;

use App\Enums\RoleEnum;
use App\Helpers\Helpers;
use App\Http\Traits\MessageTrait;
use Illuminate\Notifications\Notification;
use App\Notifications\CancelOrderNotification;

class CancelOrderSMS
{
    use MessageTrait;

    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  Notification  $notification
     * @return void
     */
      public function send($notifiable, CancelOrderNotification $cancelOrdNotification)
      {
            return $cancelOrdNotification->toSend($notifiable);
      }

      public function isEnabled()
      {
            $settings = Helpers::getSettings();
            return ($settings['activation']['send_sms'] && $settings['sms_methods']['config']['cancel_order_sms']);
      }

      public function getMessage($roleName, $order)
      {
            switch($roleName) {
                  case RoleEnum::CONSUMER:
                        return "Your order (#{$order->order_number}) has been cancelled.";
                  case RoleEnum::VENDOR:
                        return "Order (#{$order->order_number}) from your catalog has been cancelled.";
                  case RoleEnum::ADMIN:
                        return "Order #{$order->order_number} has been cancelled.";
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
