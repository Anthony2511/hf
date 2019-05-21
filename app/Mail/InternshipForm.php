<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InternshipForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $childs;
    public $bodyMessage;
    public $phone;
    public $fax;
    public $affil;


    public function __construct(Request $request)
    {
        $this->name = $request->input('name');
        $this->email     = $request->input('email');
        $this->childs     = $request->input('childs');
        $this->bodyMessage   = $request->input('bodyMessage');
        $this->phone      = $request->input('phone');
        $this->fax      = $request->input('fax');
        $this->affil      = $request->input('affil');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.internshipForm')
            ->subject(ucfirst($this->name) . ' ' . ' viens d’envoyer un message à partir du site h-f.be')
            ->from($this->email, ucfirst($this->name));
    }
}