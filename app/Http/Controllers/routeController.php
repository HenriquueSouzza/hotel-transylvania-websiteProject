<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeController extends Controller
{
    public function index(){
        return view('site.home');
    }

    public function emBreve(){
        return view('site.embreve');
    }
    
    public function contato(){
        return view('site.contactArea');
    }

    public function hotel(){
        return view('site.hotel');
    }
}