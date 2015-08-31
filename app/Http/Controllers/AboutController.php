<?php

namespace todos\Http\Controllers;

use Illuminate\Http\Request;

use todos\Http\Requests;
use todos\Http\Controllers\Controller;
use todos\Http\Requests\ContactFormRequest;

class AboutController extends Controller
{
    public function create()
    {
        return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');

        \Mail::send('emails.contact',
            [
                'name'         => $request->get('name'),
                'email'        => $request->get('email'),
                'user_message' => $request->get('message')
            ], function ($message) {
                $message->from('email@example.com');
                $message->to('email@example.com', 'Test')->subject('Feedback');
            });

        return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
