<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});


Route::get('/products_test/{id}',function ($id = null) {
    return view('product', ['id'=> $id]);

});
Route::get('/products_test', function () {
    return "Você não passou nenhum id";

});