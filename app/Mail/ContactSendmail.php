<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;
    
    private $name;
    private $email;
    private $tel;
    private $contact_body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->name = $inputs['name'];
        $this->email = $inputs['email'];
        $this->tel = $inputs['tel'];
        $this->contact_body  = $inputs['contact_body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(config('mail.from.address'),'Lys.kichijoji')
            ->bcc(config('mail.from.address'))
            ->subject('【リース 吉祥寺】お問い合わせありがとうございます')
            ->view('contact.mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'tel' => $this->tel,
                'contact_body'  => $this->contact_body,
            ]);
    }
}
