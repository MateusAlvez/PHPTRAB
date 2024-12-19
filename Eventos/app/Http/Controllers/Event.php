<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
    public function index (){
        $nome = "Mateus";
        $idade = 26;
        $arr = [1,2,3,4,5];
        $nomes = ["Mateus", "Isadora", "Alex", "Pedro"];   
    
        return view('welcome',
        ['nome' => $nome,
         'idade'=> $idade,
          'arr' => $arr,
          'nomes' => $nomes
        ]);
    
    }


    public function create(){
        return view('events.create');
    }
}
