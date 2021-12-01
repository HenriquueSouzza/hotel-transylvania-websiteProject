<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function photo(){
        $photos = Photo::all();
        return view('site.fotos', ['photos' => $photos]);
    }

    public function store(Request $request){
        $Photo = new Photo;
        $Photo->title = $request->title;

        //imagane upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension(); 
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")).".".$extension;
            $requestImage->move(public_path('img/Photos'), $imageName);
            $Photo->image = $imageName;
        }

        $Photo->save();
        return redirect('/create')->with('msgPhoto', 'Imagem ADD com sucesso!');
    }
}