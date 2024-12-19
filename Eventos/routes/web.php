<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Event; 

Route::get('/', [Event::class, 'index']);

Route::get('/events/create', [Event::class,'create']);

Route::get('/events/contact', [Event::class,'contact']); 

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