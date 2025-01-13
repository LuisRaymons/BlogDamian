<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;

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

    public function paquete1xv(){
        return view('paquete1xvview');
    } 

    public function paquete2xv(){
        return view('paquete2xvview');
    } 

    public function paquete3xv(){
        return view('paquete3xvview');
    } 

    public function plans(){
        return view('planes');
    }  

    public function enviocorreo(Request $request){
        
        Mail::to($request->emailTo)
            ->send(new ContactoMailable);
            
        return 'Mensaje Enviado a ' . $request->emailTo;
    }
}
