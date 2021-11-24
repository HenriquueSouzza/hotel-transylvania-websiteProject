<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quartos;

class roomController extends Controller
{
    public function quartos(){
        $quartos = Quartos::all();

        return view('site.quartos', ['quartos' => $quartos]);
    }

    public function quartosCreate(){
        return view('site.quartosCreate');
    }

    public function store(Request $request){
            $quartos = new Quartos;
            $quartos->title = $request->title;
            $quartos->description = $request->description;
            $quartos->save();
            return redirect('/quartos');
    }
    public function contato(){
        return view('site.contactArea');
    }
}
