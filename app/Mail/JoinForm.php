<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JoinForm extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $email;
    public $bodyMessage;
    public $phone;
    public $date;


    public function __construct(Request $request)
    {
        $this->firstname = $request->input('firstname');
        $this->lastname  = $request->input('lastname');
        $this->email     = $request->input('email');
        $this->bodyMessage   = $request->input('bodyMessage');
        $this->phone      = $request->input('phone');
        $this->date      = $request->input('date');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.joinForm')
            ->subject(ucfirst($this->firstname) . ' ' . ucfirst($this->lastname) . ' viens d’envoyer son inscription à partir du site h-f.be')
            ->from($this->email, ucfirst($this->firstname) . ' ' . ucfirst($this->lastname));
    }
}