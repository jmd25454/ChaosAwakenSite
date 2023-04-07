<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('home');
    }

    public function about(Request $request)
    {
        return view('about');        
    }

    public function downloads(Request $request)
    {
        return view('downloads');        
    }
}
