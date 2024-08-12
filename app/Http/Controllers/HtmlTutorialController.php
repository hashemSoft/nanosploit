<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlTutorialController extends Controller
{
    
    public function index(){
        
        return view('tutorials.html.intro.overview');
    }

    public function element()
    {

        return view('tutorials.html.basic.element');
    }

    public function structure()
    {

        return view('tutorials.html.basic.structure');
    }


}
