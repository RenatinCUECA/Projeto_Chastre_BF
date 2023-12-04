<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuffetController extends Controller
{
    public function index()
    {
        return view('buffet.index');
    }
}
