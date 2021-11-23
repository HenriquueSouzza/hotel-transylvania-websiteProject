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
}