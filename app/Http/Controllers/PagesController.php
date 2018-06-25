<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function root()
    {
    	return view('pages.root');
    }
}
