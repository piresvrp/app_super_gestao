<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public  function  principal()
    {
        $data['titulo'] = "Home";
        return view('site.principal', $data);
    }
}
