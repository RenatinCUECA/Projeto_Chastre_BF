<?php

namespace App\Http\Controllers;

use App\Models\Buffet;
use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index () {
        $events = Event::all();

        return view('events.index',['events'=>$events]);
    }

    public function create() {
        $buffets = Buffet::all();

        return view('events.create',['buffets'=>$buffets]);
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

        // Image Upload
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

    public function show($id) 
    {
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}
