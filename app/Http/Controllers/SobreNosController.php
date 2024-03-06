<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobrenos()
    {
        $data['titulo'] = "Sobre nós";
        return view('site.sobre-nos', $data);
    }
}
