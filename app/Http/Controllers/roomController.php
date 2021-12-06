<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class roomController extends Controller
{
    public function quartos(){
        $quartos = Room::all();
        //$room = Room::findOrFail();

    return view('site.quartos', ['quartos' => $quartos /*,'room' => $room]*/]);
    }

    public function store(Request $request){
            $Room = new Room;
            $Room->title = $request->title;
            $Room->description = $request->description;

            //imagane upload
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $requestImage = $request->image;
                $extension = $requestImage->extension(); 
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")).".".$extension;
                $requestImage->move(public_path('img/rooms'), $imageName);
                $Room->image = $imageName;
            }

            $Room->save();
            return redirect('/create')->with('msgRoom', 'Quarto criado com sucesso!');
    }
}
