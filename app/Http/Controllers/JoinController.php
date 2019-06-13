<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Competition;
use Validator;
use App\Mail\JoinForm;
use Session;
use Illuminate\Support\Facades\Mail;

class JoinController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'join_index')->firstOrFail();
        $this->data['competitions'] = Competition::orderBy('startDate', 'ASC')->where('isFinish','not-finish')->limit(2)->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();
        return view('pages.' . $page->template, $this->data, [
            'competitions' => $this->data['competitions']
        ]);
    }

    public function joinForm(Request $request) {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|min:2|max:255',
            'lastname'  => 'required|min:2|max:255',
            'email'     => 'required|email',
            'phone'       =>'required',
            'date'   => 'required|date',
            'club' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if ($validator->fails()) {
            return redirect()->to(route('rejoindre', '#formerror'))
                ->withInput()
                ->withErrors($validator);
        }

        try {
            Mail::to('contact@hf.be')
                ->send(new JoinForm($request));
        }catch (Exception $ex) {
            return 'We eregrgrtg0';
        }


        \Session::flash('success', 'Votre inscription a bien été envoyé. Merci&nbsp;!');

        return redirect()->to(route('rejoindre', '#form'));
    }
}
