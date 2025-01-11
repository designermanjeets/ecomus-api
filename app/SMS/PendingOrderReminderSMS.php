<?php

namespace App\SMS;

use App\Enums\RoleEnum;
use App\Helpers\Helpers;
use App\Http\Traits\MessageTrait;
use Illuminate\Notifications\Notification;
use App\Notifications\PendingOrderReminderNotification;

class PendingOrderReminderSMS
{
      use MessageTrait;

      /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  Notification  $notification
     * @return void
     */
      public function send($notifiable, PendingOrderReminderNotification $pendingOrdRemNotification)
      {
            return $pendingOrdRemNotification->toSend($notifiable);
      }

      public function isEnabled()
      {
            $settings = Helpers::getSettings();
            return ($settings['activation']['send_sms'] && $settings['sms_methods']['config']['pending_order_sms']);
      }

      public function getMessage($roleName, $order)
      {
            switch($roleName) {
                  case RoleEnum::VENDOR:
                        return "Order #{$order->order_number} has been pending for over 24 hours. Please update the order status promptly.";
                  case RoleEnum::ADMIN:
                        return "Order #{$order->order_number} has been pending for more than 24 hours. Please review and take necessary action.";
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
