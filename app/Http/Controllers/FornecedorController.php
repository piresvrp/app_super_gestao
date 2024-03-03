<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
   public  function index(){

         $data["fornecedores"] = array(
                0 => array("nome" => "Fornecedor Teste 1", "status" => "N", "cnpj" => ''),
                1 => array("nome" => "Fornecedor Teste 2", "status" => "N", "cnpj" => "ASDSA"),
                2 => array("nome" => "Fornecedor Teste 3", "status" => "N", "cnpj" => "ASD121212212SA"),
        );

      // $data["fornecedores"] = array();

//       $data = array();
        return view("app/fornecedor/index", $data);
   }
}
