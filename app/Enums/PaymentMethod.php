<?php

namespace App\Enums;

enum PaymentMethod {
  const COD = 'cod';
  const PAYPAL = 'paypal';
  const STRIPE = 'stripe';
  const MOLLIE = 'mollie';
  const RAZORPAY = 'razorpay';
  const PHONEPE = 'phonepe';
  const INSTAMOJO = 'instamojo';
  const CCAVENUE = 'ccavenue';
  const BKASH = 'bkash';
  const BANK_TRANSFER = 'bank_transfer';
  const FLUTTERWAVE = 'flutter_wave';
  const PAYSTACK = 'paystack';
  const SSLCOMMERZ = 'sslcommerz';
  const SAB_PAISA = 'sub_paisa';
  const CASH_FREE = 'cash_free';
   const ZYAADA_PAY = 'zyaada_pay';
   const ZYAADA_PAY_GAJ = 'zyaada_pay_gaj';
   const NEO_KRED = 'neoKred';
   const EASE_BUZZ = 'ease_buzz';
  const ALL_PAYMENT_METHODS = [
    'cod', 'paypal', 'stripe', 'sslcommerz','flutter_wave', 'paystack', 'mollie', 'bank_transfer','bkash', 'ccavenue', 'phonepe', 'instamojo','razorpay','sub_paisa','cash_free','zyaada_pay','neoKred','ease_buzz','zyaada_pay_gaj'
  ];
}
