<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index () {
        $events = Event::all();

        return view('welcome',['events'=>$events]);
    }

    public function create () {
        return view('events.create');
    }

    public function store(Request $request) {

        $event = new Event;


        $event->data = $request->data;
        $event->hora = $request->hora;
        $event->buffet = $request->buffet;
        $event->editor = $request->editor;
        $event->qtd_convidados = $request->qtd_convidados;
        $event->nome = $request->nome;
        $event->idade = $request->idade;

        $event->save();

        return redirect('/');
    }
}
