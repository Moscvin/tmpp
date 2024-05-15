<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Representation;
use Exception;

class ContactController extends Controller
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $page = Page::find(4);
        $this->seoHelper->getSEO($page);

        $representations = Representation::activeAndOrderBy('order')->get();

        return view('pages.contact', compact('page', 'representations'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->getDTO()->toArray());

        return redirect()->back()->with('success', $this->vars['success__sended']);
    }
}
