<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }
    
    public function education(){
        return view('education');
    }

    public function skill(){
        return view('skill');
    }

    public function achievement(){
        return view('achievement');
    }

    public function contact(){
        return view('contact');
    }
}
