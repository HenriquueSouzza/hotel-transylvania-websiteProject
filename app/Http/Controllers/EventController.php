<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('site.home');
    }

    public function searchReserva(){
        return view('site.embreve');
    }

}
