<?php

namespace todos\Http\Controllers;

use Illuminate\Http\Request;

use todos\Http\Requests;
use todos\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    function index()
    {
        return view('welcome')->with('luras', 'Fraticinida est domesticus tumultumque')->with('date', date('Y-m-d'));
    }
}
