<?php

namespace todos\Http\Controllers;

use Illuminate\Http\Request;

use todos\Http\Requests;
use todos\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    function index()
    {
        $lists = [
            'Orexiss ridetis',
            'Quadras ridetis',
            'Urias accelerare',
            'Torus brevis adiurator est',
            'Candidatuss sunt mortems de placidus eleates.'
        ];

        return view('welcome')->with('lists', $lists);
    }
}
