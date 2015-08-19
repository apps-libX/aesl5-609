<?php

namespace todos\Http\Controllers;

use Illuminate\Http\Request;

use todos\Http\Requests;
use todos\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    function index()
    {
        $data = [
            'luras' => 'Frondators cantare',
            'date'  => date('Y-m-d')
        ];

        return view('welcome')->with($data);
    }
}
