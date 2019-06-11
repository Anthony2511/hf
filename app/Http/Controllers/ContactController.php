<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use Validator;
use App\Mail\ContactForm;
use Session;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'contact_index')->firstOrFail();
        $this->data['competitions'] = Competition::orderBy('startDate', 'ASC')->where('isFinish', 'not-finish')->limit(2)->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();
        return view('pages.' . $page->template, $this->data, [
            'competitions' => $this->data['competitions']
        ]);
    }

    public function contactForm(Request $request) {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|min:2|max:255',
            'lastname'  => 'required|min:2|max:255',
            'email'     => 'required|email',
            'bodyMessage'   => 'required|min:5|max:5000',
            'subject'   => 'required|min:2|max:50'
        ]);

        if ($validator->fails()) {
            return redirect()->to(route('contact', '#formerror'))
                ->withInput()
                ->withErrors($validator);
        }

        try {
            Mail::to('contact@hf.be')
                ->send(new ContactForm($request));
        }catch (Exception $ex) {
            return 'We eregrgrtg0';
        }


        \Session::flash('success', 'Votre message a bien été envoyé. Merci&nbsp;!');

        return redirect()->to(route('contact', '#form'));
    }
}
