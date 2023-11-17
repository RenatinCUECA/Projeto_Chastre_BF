<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index () {
        
        $nome = "Renato";
        $idade = 19;
    
        $arr = [10,20,30,40,50];
        $nomes = ['Mateus', 'Renato', 'Pé de manga', 'Chastre corno'];
    
    
        return view('welcome', 
        [
        'nome' => $nome, 
        'idade' => $idade,
        'array' => $arr,
        'nomes' => $nomes
        ]);
    }

    public function create () {
        return view('events.create');
    }
}
