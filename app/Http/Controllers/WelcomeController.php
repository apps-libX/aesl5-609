<?php

namespace todos\Http\Controllers;

use Illuminate\Http\Request;

use todos\Http\Requests;
use todos\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    function index()
    {
        return view('welcome')->withAbaculus('Nunquam experientia exsul.');
    }
}
