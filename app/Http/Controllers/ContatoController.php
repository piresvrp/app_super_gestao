<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        $data['titulo'] = "Contato";
       return view('site.contato', $data);
    }
}
