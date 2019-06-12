<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Internship;
use Validator;
use App\Mail\InternshipForm;
use Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class InternshipController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::where('template', 'internships_index')->firstOrFail();
        $this->data['internshipsList'] = Internship::where('isFinish','not-finish')->get();

        $this->data['title']          = $page->title;
        $this->data['page']           = $page->withFakes();

        /************/
        $query = Internship::query();
        if ($request->has('order')) {
            $query->orderBy('startDay', $request->get('order'));
        }

        if ($request->has('isFinish')) {
            if ($request->get('isFinish') !== 'all') {
                $query->where('isFinish', $request->get('isFinish'));
            }
        }

        $this->data['internships'] = $query->paginate(5);

        if ($request->ajax()) {
            return [
                'internships' => view('partials.single.internship.item_internship',
                    [
                        'internships' => $this->data['internships'],
                    ])->render(),
                'next_page' => $this->data['internships']->nextPageUrl()
            ];
        }

        $this->data['getLoadMoreLink'] = $this->getLoadMoreLink($request);

        return view('pages.internships.' . $page->template, $this->data);
    }

    public function filter(Request $request)
    {

        $query = Internship::query();
        if ($request->has('order')) {
            $query->orderBy('startDay', $request->get('order'));
        }

        if ($request->has('isFinish')) {
            $query->where('isFinish', $request->get('isFinish'));
        }


        $internships = $query->paginate(3);

        if ($request->ajax()) {
            return [
                'internships' => view('partials.single.internship.item_internship',
                    [
                        'internships' => $internships
                    ])->render(),
                'next_page' => $internships->nextPageUrl()
            ];
        }

        return view('pages.internships.internships-filter',
            [
                'internships' => $internships
            ]);
    }

    public function internshipForm(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:255',
            'email'     => 'required|email',
            'childs' => 'required|integer',
            'affil' => 'required',
            'bodyMessage'   => 'required|min:5|max:5000'
        ]);

        if ($validator->fails()) {
            return redirect()->to(URL::previous().'#formerror')
                ->withInput()
                ->withErrors($validator);
        }

        try {
            Mail::to('contact@hf.be')
                ->send(new InternshipForm($request));
        }catch (Exception $ex) {
            return 'We eregrgrtg0';
        }

        \Session::flash('success', 'Votre message a bien été envoyé. Merci&nbsp;!');

        return redirect()->to(route('confirmation-stage', '#form'));
    }

    public function show(Internship $internship)
    {
        $allStages = Internship::where('isFinish', 'not-finish')->get();

        return view('pages.internships.internships_show', [
            'internship' => $internship,
            'allStages' => $allStages
        ]);
    }

    public function getLoadMoreLink(Request $request) {

        $querystring = '';

        if ($request->has('order') ) {
            $querystring .= '&order=' . $request->get('order');
        }

        if ($request->has('isFinish') ) {
            $querystring .= '&isFinish=' . $request->get('isFinish');
        }

        return $querystring;
    }
}
