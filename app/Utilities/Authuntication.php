<?php
namespace App\Utilities;

class Authuntication
{
    private const OPENSSL_CIPHER_NAME = "aes-128-cbc";
    private const CIPHER_KEY_LEN = 16;

    private static function fixKey($key)
    {
        if (strlen($key) < self::CIPHER_KEY_LEN) {
            return str_pad("$key", self::CIPHER_KEY_LEN, "0"); 
        }
       
        if (strlen($key) > self::CIPHER_KEY_LEN) {
            return substr($key, 0, self::CIPHER_KEY_LEN); 
        }
    
        return $key;
    }

    public static function encrypt($key, $iv, $data)
    {
        $encodedEncryptedData = base64_encode(openssl_encrypt($data, self::OPENSSL_CIPHER_NAME, self::fixKey($key), OPENSSL_RAW_DATA, $iv));
        $encodedIV = base64_encode($iv);
        $encryptedPayload = $encodedEncryptedData . ":" . $encodedIV;

        return $encryptedPayload;
        
        /* $cipher = "AES-128-CBC";
        $iv = base64_decode($iv); 
        $key = base64_decode($key); 
         self::fixKey($key);
     
        if (strlen($iv) !== 16 || strlen($key) !== 16) {
            throw new Exception("Invalid IV or Key length. Must be 16 bytes each.");
        }

        $encrypted = openssl_encrypt($spURL, $cipher, $key, OPENSSL_RAW_DATA, $iv);

        return base64_encode($encrypted);*/

    }

    public static function decrypt($key, $iv, $data)
    {
        $parts = explode(':', $data);
        $encrypted = $parts[0];
        $iv = $parts[1];
        $decryptedData = openssl_decrypt(base64_decode($encrypted), self::OPENSSL_CIPHER_NAME, self::fixKey($key), OPENSSL_RAW_DATA, base64_decode($iv));

        return $decryptedData;

        
        
    }
    
   
}
