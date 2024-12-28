<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function home(){
        return view('home');
    }

    public function services(){
        return view('services');
    }

    public function about(){
        return view('about');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function contact(){
        return view('contact');
    }

    public function plans(){
        return view('planes');
    }
}
