<?php

namespace todos\Http\Controllers;

use Illuminate\Http\Request;

use todos\Http\Requests;
use todos\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function create()
    {
        return view('about.contact');
    }
    public function store(ContactFormRequest $request)
    {
        return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
