<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view ('users.index');
    }

    public function apple(){
        
        return view ('users.apple');
    }
    public function new(){
        
        return view ('users.blog');
    }
    public function contact(){
        return view ('users.contact');
    }
    public function about(){
        
        return view ('users.about');
    }
}
