<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = "Claudia";

    $array = [1,2,3,4,5,6,7,8,9,10];

    $nomes = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];

    return view('welcome', ['meu_nome' => $nome, 'profissao' => 'Programador', 'idade'=> 22, 'lista' => $array, 'alfabeto' => $nomes]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

