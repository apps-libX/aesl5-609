<?php

namespace todos\Http\Controllers;

use Illuminate\Http\Request;

use todos\Http\Requests;
use todos\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    function index()
    {
        $luras = 'Secundus, magnum demissios velox contactus de brevis, flavum adelphis.';
        $date  = date('Y-m-d');

        return view('welcome', compact('luras', 'date'));
    }
}
