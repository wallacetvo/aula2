<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boatarde', function (Request $req) {
    return "Boa tarde, $req->nome!";
});
/*
Route::get('/boatarde/{nome}/{idade?}', function ($nome, $idade=null) {
    if ($idade) {
        return "Boa tarde, $nome! Já tem $idade anos? Véio paca...";
    }
    return "Boa tarde, $nome! Você não me disse sua idade...";
    
});
*/
Route::get('/boatarde/{nome}/{idade?}', function ($nome, $idade=null) {
    $tabela = [
        ['nome' => 'Cecilia', 'idade' => 34],
        ['nome' => 'Maria Fernanda', 'idade' => 20],
        ['nome' => 'Michelle', 'idade' => 21],
        ['nome' => 'Claudia', 'idade' => null],
        ['nome' => 'Glauber', 'idade' => 32],
        ['nome' => 'Wallace', 'idade' => 43],
        ['nome' => 'Luiz', 'idade' => 35],
        ['nome' => 'Aldo', 'idade' => 42]
    ];
    //return view('boatarde', ['nome' => $nome, 'idade' => $idade]); Mesma coisa que a linha abaixo
    return view('boatarde', compact('nome', 'idade', 'tabela'));
});

Route::get('/home', function () {
    return view('home2');
});
