<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public  function teste(int $valor = 0, int $valor2 = 0)
    {
        $data['x'] = $valor;
        $data['y'] = $valor2;
        return  view('site.teste', $data);
    }
}
