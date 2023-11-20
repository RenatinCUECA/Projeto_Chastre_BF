<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index () {
        $events = Event::all();

        return view('events.index',['events'=>$events]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request)
     {

        $event = new Event();


        $event->data = $request->data;
        $event->hora = $request->hora;
        $event->buffet = $request->buffet;
        $event->editor = $request->editor;
        $event->qtd_convidados = $request->qtd_convidados;
        $event->nome = $request->nome;
        $event->idade = $request->idade;

        //Image Upload
        if($request-> hasFile('image') && $request->file('image')->isValid()) 
        {
            $requestImage = $request -> image;

            $extension = $requestImage -> extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"));

            $requestImage -> move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect()->route('events.index')->with('msg', 'Reserva realizada com sucesso');
    }
}
