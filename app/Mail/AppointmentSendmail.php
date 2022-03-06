<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentSendmail extends Mailable
{
    use Queueable, SerializesModels;
    
    private $kanji_name;
    private $hira_name;
    private $tel;
    private $email;
    private $perm;
    private $extension;
    private $eyebrow;
    private $option;
    private $date;
    private $time;
    private $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        // $this->kanji_name = $user->['kanji_name'];
        // $this->hira_name = $inputs['hira_name'];
        // $this->tel = $inputs['tel'];
        // $this->email = $inputs['email'];
        if (isset($inputs['perm']))
        {
            $this->perm = $inputs['perm'];
        }
        if (isset($inputs['extension']))
        {
            $this->extension = $inputs['extension'];
        }
        if (isset($inputs['eyebrow']))
        {
            $this->eyebrow = $inputs['eyebrow'];
        }
        if (isset($inputs['option']))
        {
            $this->option = $inputs['option'];
        }
        $this->date = $inputs['date'];
        $this->time = $inputs['time'];
        $this->comment  = $inputs['comment'];
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
            ->view('appointment.mail')
            ->with([
                // 'kanji_name' => $this->name01,
                // 'hira_name' => $this->name02,
                // 'email' => $this->email,
                // 'tel' => $this->tel,
                'perm' => $this->perm,
                'extension' => $this->extension,
                'eyebrow' => $this->eyebrow,
                'option' => $this->option,
                'date' => $this->date,
                'time' => $this->time,
                'comment'  => $this->comment,
            ]);
    }
}
