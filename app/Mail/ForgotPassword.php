<?php

namespace App\Mail;

use App\Helpers\Helpers;
use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    
    public $store;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token,$store)
    {
        $this->token = $token;
        $this->store = $store;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->store==22){
            
            $settings = Helpers::getSettings();
        if ($settings['email']['password_reset_mail']) {
            return $this->subject('Forgot Password - Fashion With Trends')->markdown('emails.forgot-password');
        }
        
        }else if($this->store==21){
            
        $settings = Helpers::getSettings();
        if ($settings['email']['password_reset_mail']) {
            return $this->subject('Forgot Password - Radharaman Fashion')->markdown('emails.forgot-password');
        }
            
            
        }else if($this->store==20){
            
            $settings = Helpers::getSettings();
        if ($settings['email']['password_reset_mail']) {
            return $this->subject('Forgot Password - Gajlaxmi Fashion')->markdown('emails.forgot-password');
        }
            
            
        }else{
            $settings = Helpers::getSettings();
            if ($settings['email']['password_reset_mail']) {
            return $this->subject('Forgot Password - stylexio')->markdown('emails.forgot-password');
        }
            
            
            
        }
        
      
       
    }
}
