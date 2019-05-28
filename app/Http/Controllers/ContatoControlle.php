<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoControlle extends Controller
{
    public function index()
    {
       

        $contato = new Contato();
        dd($contato->lista());
    }
}
