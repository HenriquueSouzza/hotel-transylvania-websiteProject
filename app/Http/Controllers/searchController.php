<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quartos;

class searchController extends Controller
{
    public function searchReserva(){

        $quartos = Quartos::all();

        return view('site.embreve', ['quartos' => $quartos]);
    }
}
