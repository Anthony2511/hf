<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $email;
    public $bodyMessage;
    public $phone;
    public $fax;
    public $subject;


    public function __construct(Request $request)
    {
        $this->firstname = $request->input('firstname');
        $this->lastname  = $request->input('lastname');
        $this->email     = $request->input('email');
        $this->bodyMessage   = $request->input('bodyMessage');
        $this->phone      = $request->input('phone');
        $this->fax      = $request->input('fax');
        $this->subject      = $request->input('subject');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contactForm')
            ->subject(ucfirst($this->subject))
            ->from($this->email, ucfirst($this->firstname) . ' ' . ucfirst($this->lastname));
    }
}